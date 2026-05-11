<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StressTestSeeder extends Seeder
{
    public function run()
    {
        // Get Stress Test assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'stress')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Feeling overwhelmed by responsibilities',
            'Finding it difficult to relax',
            'Feeling stressed without a clear reason',
            'Having trouble sleeping because of stress',
            'Feeling emotionally exhausted',
            'Becoming irritated or frustrated easily',
            'Feeling unable to control important things in life',
            'Struggling to concentrate because of stress',
            'Feeling pressure from work, studies, or personal life',
            'Feeling mentally drained at the end of the day',
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