<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Result;
use App\Models\Response;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function show()
    {
        // to fetch data 
        $questions = Question::where('assessment_id', 1)->get();

    //  to return view and data in view
        return view('assessment.phq9', compact('questions'));
    }
    public function submit(Request $request)
    {
        $answers = $request->answers ;
        $score   = array_sum($answers);

        if ($score <= 4) {
            $severity = 'Minimal';
        } elseif ($score <= 9) {
            $severity = 'Mild';
        } elseif ($score <= 14) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Persist result
        $result                = new Result();
        $result->user_id       = 1; // TODO: replace with auth()->id() when authentication is added
        $result->assessment_id = 1;
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

        // Persist per-question responses
        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }

        return view('assessment.result', compact('score', 'severity'));
    }

    public function history()
    {
        $results = Result::orderBy('created_at', 'desc')->get();

        return view('assessment.history', compact('results'));
    }

}