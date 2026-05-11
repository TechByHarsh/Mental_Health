<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialAnxietySeeder extends Seeder
{
    public function run()
    {
        // Get Social Anxiety Test assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'socialanxiety')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Feeling nervous while talking to unfamiliar people',
            'Avoiding social situations because of fear or anxiety',
            'Worrying about being judged by others',
            'Feeling uncomfortable speaking in front of groups',
            'Overthinking conversations after social interactions',
            'Feeling embarrassed easily in social situations',
            'Avoiding eye contact during conversations',
            'Feeling anxious before attending social events',
            'Having difficulty starting conversations',
            'Feeling afraid of making mistakes in front of others',
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