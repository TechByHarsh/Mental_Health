<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    /**
     * All 9 PHQ-9 questions.
     */
    private array $questions = [
        1  => 'Little interest or pleasure in doing things',
        2  => 'Feeling down, depressed, or hopeless',
        3  => 'Trouble falling or staying asleep, or sleeping too much',
        4  => 'Feeling tired or having little energy',
        5  => 'Poor appetite or overeating',
        6  => 'Feeling bad about yourself — or that you are a failure or have let yourself or your family down',
        7  => 'Trouble concentrating on things, such as reading the newspaper or watching television',
        8  => 'Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual',
        9  => 'Thoughts that you would be better off dead, or of hurting yourself in some way',
    ];

    /**
     * Score labels for the 4 frequency options.
     */
    private array $scoreLabels = [
        0 => 'Not at all',
        1 => 'Several days',
        2 => 'More than half the days',
        3 => 'Nearly every day',
    ];

    /**
     * Show the PHQ-9 assessment form.
     */
    public function index()
    {
        return view('assessment.index', [
            'questions'   => $this->questions,
            'scoreLabels' => $this->scoreLabels,
        ]);
    }

    /**
     * Handle assessment form submission, score it, and store results.
     */
    public function store(Request $request)
    {
        // Validate: all 9 answers required, each 0–3
        $rules = [];
        for ($i = 1; $i <= 9; $i++) {
            $rules["question_{$i}"] = ['required', 'integer', 'min:0', 'max:3'];
        }
        $validated = $request->validate($rules);

        // Calculate total score
        $totalScore = 0;
        for ($i = 1; $i <= 9; $i++) {
            $totalScore += (int) $validated["question_{$i}"];
        }

        // Determine severity level
        $severityLevel = $this->getSeverity($totalScore);

        // Store assessment record
        $assessment = Assessment::create([
            'user_id'        => Auth::id(),
            'type'           => 'PHQ-9',
            'total_score'    => $totalScore,
            'severity_level' => $severityLevel,
        ]);

        // Store individual responses
        for ($i = 1; $i <= 9; $i++) {
            Response::create([
                'assessment_id'   => $assessment->id,
                'question_number' => $i,
                'selected_score'  => (int) $validated["question_{$i}"],
            ]);
        }

        return redirect()->route('assessment.result', $assessment->id);
    }

    /**
     * Show the result page for a specific assessment.
     */
    public function result(int $id)
    {
        $assessment = Assessment::with('responses')
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $suggestions = $this->getSuggestions($assessment->severity_level);

        return view('assessment.result', [
            'assessment'  => $assessment,
            'questions'   => $this->questions,
            'scoreLabels' => $this->scoreLabels,
            'suggestions' => $suggestions,
        ]);
    }

    /**
     * Show the user's assessment history with trend analysis.
     */
    public function history()
    {
        $assessments = Auth::user()
            ->assessments()
            ->orderBy('created_at', 'desc')
            ->get();

        // Build trend data: compare each assessment to the previous one
        $trends = [];
        $sorted = $assessments->sortBy('created_at')->values();
        foreach ($sorted as $index => $a) {
            if ($index === 0) {
                $trends[$a->id] = 'neutral';
            } else {
                $prev = $sorted[$index - 1];
                if ($a->total_score < $prev->total_score) {
                    $trends[$a->id] = 'improving';
                } elseif ($a->total_score > $prev->total_score) {
                    $trends[$a->id] = 'worsening';
                } else {
                    $trends[$a->id] = 'neutral';
                }
            }
        }

        // Score data for mini chart (chronological)
        $chartLabels = $sorted->map(fn($a) => $a->created_at->format('M d'))->toArray();
        $chartScores = $sorted->map(fn($a) => $a->total_score)->toArray();

        return view('assessment.history', [
            'assessments'  => $assessments,
            'trends'       => $trends,
            'chartLabels'  => $chartLabels,
            'chartScores'  => $chartScores,
        ]);
    }

    /**
     * Map total score to PHQ-9 severity level.
     */
    private function getSeverity(int $score): string
    {
        return match (true) {
            $score <= 4  => 'Minimal',
            $score <= 9  => 'Mild',
            $score <= 14 => 'Moderate',
            $score <= 19 => 'Moderately Severe',
            default      => 'Severe',
        };
    }

    /**
     * Return tailored suggestions based on severity level.
     */
    private function getSuggestions(string $severity): array
    {
        return match ($severity) {
            'Minimal' => [
                'icon'    => '🌿',
                'color'   => 'emerald',
                'headline' => 'You\'re doing great! Keep it up.',
                'tips'    => [
                    'Maintain a consistent sleep schedule (7–9 hours)',
                    'Stay physically active — even a 20-min daily walk helps',
                    'Nurture your social connections and relationships',
                    'Practice gratitude journaling',
                    'Continue any mindfulness or relaxation practices you enjoy',
                ],
            ],
            'Mild' => [
                'icon'    => '🌤️',
                'color'   => 'yellow',
                'headline' => 'Some symptoms detected — small steps make a big difference.',
                'tips'    => [
                    'Try daily mindfulness meditation (even 5–10 minutes)',
                    'Start a mood or feelings journal',
                    'Take regular breaks from screens and social media',
                    'Spend time in nature or with people you trust',
                    'Talk to a close friend or family member about your feelings',
                ],
            ],
            'Moderate' => [
                'icon'    => '🌥️',
                'color'   => 'orange',
                'headline' => 'Lifestyle changes are recommended.',
                'tips'    => [
                    'Establish a structured daily routine',
                    'Limit alcohol and avoid recreational drugs',
                    'Exercise regularly — aim for 30 minutes most days',
                    'Consider speaking with a counselor or therapist',
                    'Reach out to a trusted person in your support network',
                    'Reduce excessive workload and set healthy boundaries',
                ],
            ],
            'Moderately Severe' => [
                'icon'    => '⛅',
                'color'   => 'red-400',
                'headline' => 'Professional support is strongly recommended.',
                'tips'    => [
                    'Schedule an appointment with a therapist or psychiatrist',
                    'Speak to your primary care doctor about your symptoms',
                    'Lean on your support system — don\'t isolate yourself',
                    'Consider joining a mental health support group',
                    'Avoid making major life decisions while feeling this way',
                    'Crisis helpline (India): iCall 9152987821',
                ],
            ],
            default => [ // Severe
                'icon'    => '🆘',
                'color'   => 'red-500',
                'headline' => 'Please reach out to a professional immediately.',
                'tips'    => [
                    'Contact a mental health professional or psychiatrist today',
                    'If you feel unsafe, go to your nearest emergency room',
                    'iCall (India) helpline: 9152987821',
                    'Vandrevala Foundation: 1860-2662-345 (24/7)',
                    'Tell a trusted person how you are feeling right now',
                    'You are not alone — help is available and recovery is possible',
                ],
            ],
        };
    }
}
