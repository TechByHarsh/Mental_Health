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

        // Persist result
        $result                = new Result();
        $result->user_id       = 1; // TODO: replace with auth()->id() when authentication is added
        $result->assessment_id = 2; // GAD-7
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

        // Persist result
        $result                = new Result();
        $result->user_id       = 1; // TODO: replace with auth()->id() when authentication is added
        $result->assessment_id = 3; // stress
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

        $result                = new Result();
        $result->user_id       = 1; 
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
        return view('assessment.result',compact('score','severity'));



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

        $result                = new Result();
        $result->user_id       = 1; 
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
        return view('assessment.result',compact('score','severity'));
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

        $result                = new Result();
        $result->user_id       = 1; 
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
        return view('assessment.result',compact('score','severity'));
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

        $result                = new Result();
        $result->user_id       = 1; 
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
        return view('assessment.result',compact('score','severity'));
    }





    

}