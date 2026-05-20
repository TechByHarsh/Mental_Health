<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Result;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        // Ai recommendations
        $recommendations = $this->generateAIRecommendations( 'PHQ-9 Depression Test', $severity, $score );

        // Persist result
        $result                = new Result();
        $result->user_id       = auth()->id();
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

        return view('assessment.result', compact('score', 'severity', 'recommendations'));
    }

    public function history()
    {
       $results = Result::where('user_id', auth()->id())
                ->orderBy('created_at', 'desc')
                ->get();

        return view('assessment.history', compact('results'));
    }


    
    // AI recomendations
  private function generateAIRecommendations($assessment, $severity, $score)
{
    $prompt = "
    Give exactly 3 short supportive mental wellness recommendations
    for:

    Assessment: $assessment
    Severity: $severity
    Score: $score

    Keep response:
    - supportive
    - calming
    - practical
    - concise
    ";

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('MISTRAL_API_KEY'),
        'Content-Type' => 'application/json',
    ])->post('https://api.mistral.ai/v1/chat/completions', [

        'model' => 'mistral-small-latest',

        'messages' => [
            [
                'role' => 'user',
                'content' => $prompt,
            ]
        ],

        'temperature' => 0.7,
    ]);

    $data = $response->json();

    return $data['choices'][0]['message']['content'];
}

    // GAD functions

    public function showGAD7()
    {   
        // fetching is being done 
        $questions = Question::where('assessment_id', 2)->get(); 

        return view("assessment.gad7", compact('questions'));
    }

    public function submitGAD7(Request $request)
    {
        $answers = $request->answers;
        if (!$answers) {
            return back()->withErrors(['answers' => 'Please answer all questions.']);
        }
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

        // Ai recomendations
        $recommendations = $this->generateAIRecommendations( 'GAD7 Test', $severity, $score );

        // Persist result
        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 2; 
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

        return view('assessment.result', compact('score', 'severity', 'recommendations'));

        
    }



    // Stress Test
     
    public function showStress()
    {
        $questions = Question::where('assessment_id', 3)->get();

        return view("assessment.stress", compact('questions'));
    }

    public function submitStress(Request $request)
    {
        $answers = $request->answers;
        if (!$answers) {
            return back()->withErrors(['answers' => 'Please answer all questions.']);
        }
        $score = array_sum($answers);

        // 10 questions, max score 30
        if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        
        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'Stress Test', $severity, $score );

        // Persist result
        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 3; 
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

        return view('assessment.result', compact('score', 'severity', 'recommendations'));
    }


    //sleep quality test

    public function showSleep()
    {
        $questions=Question::where("assessment_id",4)->get();

        return view ('assessment.sleep', compact('questions'));
    }

    public function submitsleep( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'Sleep Test', $severity, $score );


        $result                = new Result();
        $result->user_id       =auth()->id();
        $result->assessment_id = 4; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));



 }



//  Social Anxiety Test

    public function showSocialAnxiety()
    {
        $questions=Question::where("assessment_id",5)->get();

        return view ('assessment.socialanxiety', compact('questions'));
    }

    public function submitSocialAnxiety( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'SocialAnxiety Test', $severity, $score );


        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 5; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }


    // Burnout Test

    
    public function showBurnOut()
    {
        $questions=Question::where("assessment_id",6)->get();

        return view ('assessment.BurnOut', compact('questions'));
    }

    public function submitBurnOut( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'BurnOut Test', $severity, $score );


        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 6; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }


    // Panic Disorder 

     
    public function showPanicDisorder()
    {
        $questions=Question::where("assessment_id",7)->get();

        return view ('assessment.PanicDisorder', compact('questions'));
    }

    public function submitPanicDisorder( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'PanicDisorder Test', $severity, $score );


        $result                = new Result();
        $result->user_id       =auth()->id();
        $result->assessment_id = 7; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }

    // Emotional Wellness Disorder 

     
    public function showEmotionalWellness()
    {
        $questions=Question::where("assessment_id",8)->get();

        return view ('assessment.emotionalwellness', compact('questions'));
    }

    public function submitEmotionalWellness( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'EmotionalWellness Test', $severity, $score );



        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 8; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }

    // Self Esteem Test


  
    public function showSelfEsteem()
    {
        $questions=Question::where("assessment_id",9)->get();

        return view ('assessment.SelfEsteem', compact('questions'));
    }

    public function submitSelfEsteem( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'SelfEsteem Test', $severity, $score );


        $result                = new Result();
        $result->user_id       = auth()->id();
        $result->assessment_id = 9; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }

    // RealtionShip Health Test 

     public function showRealtionshipHealth()
    {
        $questions=Question::where("assessment_id",10)->get();

        return view ('assessment.RealtionshipHealth', compact('questions'));
    }

    public function submitRealtionshipHealth( Request $request)
    {
        $answers=$request->answers;
        if(!$answers){
            return back()->withErrors(['answers'=>'Please answer all questions']);

        }
        $score=array_sum($answers);

         if ($score <= 7) {
            $severity = 'Minimal';
        } elseif ($score <= 14) {
            $severity = 'Mild';
        } elseif ($score <= 22) {
            $severity = 'Moderate';
        } else {
            $severity = 'Severe';
        }

        // Ai Recommendations

        $recommendations = $this->generateAIRecommendations( 'RelationshipHealth Test', $severity, $score );


        $result                = new Result();
        $result->user_id       =auth()->id();
        $result->assessment_id = 10; 
        $result->score         = $score;
        $result->severity      = $severity;
        $result->save();

    // to save every questions response in response table

        foreach ($answers as $question_id => $answer) {
            $response              = new Response();
            $response->result_id   = $result->id;
            $response->question_id = $question_id;
            $response->answer      = $answer;
            $response->save();
        }
        return view('assessment.result',compact('score', 'severity', 'recommendations'));
    }













    

}