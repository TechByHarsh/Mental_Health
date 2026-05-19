<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshipHealthSeeder extends Seeder
{
    public function run()
    {
        // Get Relationship Health assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'Relationship Health')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'I communicate openly and honestly in my relationships',
            'I feel respected by the people close to me',
            'I am comfortable expressing my feelings in relationships',
            'I feel emotionally supported by my partner or loved ones',
            'I handle conflicts in a healthy manner',
            'I trust the people in my relationships',
            'I feel valued and appreciated in my relationships',
            'I maintain healthy boundaries with others',
            'I feel safe and secure in my relationships',
            'My relationships positively impact my emotional well-being',
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