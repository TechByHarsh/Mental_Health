<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BurnoutTestSeeder extends Seeder
{
    public function run()
    {
        // Get Burnout Test assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'burnout')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Feeling emotionally drained most of the time',
            'Feeling exhausted even after resting',
            'Losing motivation to complete daily tasks',
            'Feeling overwhelmed by responsibilities',
            'Having difficulty concentrating on work or studies',
            'Feeling detached from people around you',
            'Getting irritated or frustrated easily',
            'Feeling mentally tired throughout the day',
            'Losing interest in activities you once enjoyed',
            'Feeling physically and emotionally exhausted',
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