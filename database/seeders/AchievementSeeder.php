<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([
            'title'        => 'Champion – University Programming Contest',
            'type'         => 'Competition',
            'organization' => 'Your University Name',
            'year'         => '2024',
            'description'  => 'Solved algorithmic problems in a time-constrained environment with a team.',
            'display_order'=> 1,
        ]);

        Achievement::create([
            'title'        => 'Machine Learning Specialization',
            'type'         => 'Certification',
            'organization' => 'Coursera (or Platform Name)',
            'year'         => '2023',
            'description'  => 'Completed a specialization covering supervised learning, model evaluation, and ML workflows.',
            'display_order'=> 2,
        ]);

        Achievement::create([
            'title'        => 'Top 5 – City-Level Hackathon',
            'type'         => 'Hackathon',
            'organization' => 'Organizer Name',
            'year'         => '2023',
            'description'  => 'Built a prototype web app in under 24 hours to solve a real-world problem.',
            'display_order'=> 3,
        ]);

        Achievement::create([
            'title'        => 'Dean’s List / Academic Excellence Award',
            'type'         => 'Award',
            'organization' => 'Your University Name',
            'year'         => '2022',
            'description'  => 'Recognized for outstanding academic performance.',
            'display_order'=> 4,
        ]);
    }
}
