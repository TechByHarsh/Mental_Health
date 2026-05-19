<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelfEsteemSeeder extends Seeder
{
    public function run()
    {
        // Get Self Esteem assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'Self Esteem')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'I feel confident in my abilities',
            'I feel good about myself',
            'I believe I deserve respect from others',
            'I am satisfied with who I am',
            'I can handle criticism without feeling worthless',
            'I feel proud of my achievements',
            'I believe I have positive qualities',
            'I do not compare myself negatively to others',
            'I feel comfortable expressing my opinions',
            'I value myself as a person',
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