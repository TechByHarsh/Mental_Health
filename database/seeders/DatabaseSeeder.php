<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Add a default password if creating
            ]
        );

        $this->call([
            PHQ9QuestionsSeeder::class,
            GAD7Seeder::class,
            StressTestSeeder::class,
            SleepTestSeeder::class,
            SocialAnxietySeeder::class,
            BurnoutTestSeeder::class,
            PanicDisorderSeeder::class,
            EmotionalWellnessSeeder::class,
            SelfEsteemSeeder::class,
            RelationshipHealthSeeder::class,
        ]);
    }
}
