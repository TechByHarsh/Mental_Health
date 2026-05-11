<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanicDisorderSeeder extends Seeder
{
    public function run()
    {
        // Get Panic Disorder assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'panicdisorder')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Experiencing sudden episodes of intense fear or panic',
            'Feeling shortness of breath during anxious moments',
            'Having a racing heartbeat during panic episodes',
            'Feeling dizzy or lightheaded unexpectedly',
            'Fear of losing control during stressful situations',
            'Avoiding places because of fear of panic attacks',
            'Feeling chest pain or discomfort during anxiety',
            'Sweating excessively during panic situations',
            'Feeling detached from reality during panic episodes',
            'Constantly worrying about having another panic attack',
        ];

        $data = [];

        foreach ($questions as $q) {
            $data[] = [
                'assessment_id' => $assessment->id,
                'question_text' => $q,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('questions')->insert($data);
    }
}