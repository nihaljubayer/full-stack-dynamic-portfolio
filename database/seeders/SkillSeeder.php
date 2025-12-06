<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        // Technical skills
        $technical = [
            ['Laravel', 80],
            ['PHP', 75],
            ['HTML & CSS', 85],
            ['JavaScript', 70],
            ['MySQL', 75],
            ['Machine Learning (Python)', 65],
        ];

        foreach ($technical as $index => [$name, $level]) {
            Skill::create([
                'name'           => $name,
                'category'       => 'technical',
                'level'          => $level,
                'display_order'  => $index + 1,
            ]);
        }

        // Soft skills
        $soft = [
            'Problem Solving',
            'Team Collaboration',
            'Communication',
            'Time Management',
            'Adaptability',
        ];

        foreach ($soft as $index => $name) {
            Skill::create([
                'name'           => $name,
                'category'       => 'soft',
                'display_order'  => $index + 1,
            ]);
        }

        // Tools & platforms
        $tools = [
            'VS Code',
            'Git & GitHub',
            'Linux',
            'Postman',
            'Figma',
        ];

        foreach ($tools as $index => $name) {
            Skill::create([
                'name'           => $name,
                'category'       => 'tool',
                'display_order'  => $index + 1,
            ]);
        }
    }
}
