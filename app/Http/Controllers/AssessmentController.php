<?php

namespace App\Http\Controllers;


use App\Models\Question;
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
        $answers=$request->answers;
        $score=array_sum($answers);

        if($score<=4){
            $severity='Minimal';
        }
        else if($score<=9){
            $severity='Mild';
        }
         else if($score<=14){
            $severity='Moderate';
        }
        else{
            $severity='Severe';
        }
        
        return "Score: $score | Severity: $severity";

       
    }

}