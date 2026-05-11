<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SleepTestSeeder extends Seeder
{
    public function run()
    {
        // Get Sleep Quality assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'sleep')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Having difficulty falling asleep',
            'Waking up multiple times during the night',
            'Feeling tired even after sleeping',
            'Having trouble staying asleep',
            'Sleeping fewer hours than needed',
            'Feeling sleepy during the daytime',
            'Experiencing stress or anxiety affecting sleep',
            'Using mobile devices late at night before sleeping',
            'Having irregular sleep schedules',
            'Feeling mentally exhausted due to poor sleep',
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