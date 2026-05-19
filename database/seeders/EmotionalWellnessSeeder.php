<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmotionalWellnessSeeder extends Seeder
{
    public function run()
    {
        // Get Emotional Wellness assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'Emotional Wellness')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'I am able to manage my emotions effectively',
            'I feel emotionally balanced most of the time',
            'I can cope with stress in healthy ways',
            'I feel positive about myself and my life',
            'I express my feelings in a healthy manner',
            'I feel connected to people around me',
            'I am able to recover after difficult situations',
            'I feel motivated and hopeful about the future',
            'I can maintain calmness during challenging moments',
            'I take care of my emotional and mental well-being',
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