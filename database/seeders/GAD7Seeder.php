<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GAD7Seeder extends Seeder
{
    public function run()
    {
        // Get GAD-7 assessment ID dynamically
        $assessment = DB::table('assessments')
            ->where('name', 'GAD-7')
            ->first();

        if (!$assessment) {
            return;
        }

        $questions = [
            'Feeling nervous, anxious, or on edge',
            'Not being able to stop or control worrying',
            'Worrying too much about different things',
            'Trouble relaxing',
            'Being so restless that it is hard to sit still',
            'Becoming easily annoyed or irritable',
            'Feeling afraid as if something awful might happen',
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