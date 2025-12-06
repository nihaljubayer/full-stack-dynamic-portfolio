<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title'       => 'Food Waste Management Platform',
            'slug'        => 'food-waste-management-platform',
            'description' => 'A web app that connects restaurants and NGOs to redistribute surplus food.',
            'image'       => 'images/projects/food-waste.jpg',
            'github_url'  => 'https://github.com/your-username/food-waste-platform',
            'demo_url'    => null,
            'tech_stack'  => 'Laravel, MySQL, REST API',
            'year'        => '2024',
            'is_featured' => true,
        ]);

        Project::create([
            'title'       => 'Personal Portfolio',
            'slug'        => 'personal-portfolio',
            'description' => 'This portfolio site built with Laravel and custom CSS.',
            'image'       => 'images/projects/portfolio.jpg',
            'github_url'  => 'https://github.com/your-username/portfolio',
            'demo_url'    => null,
            'tech_stack'  => 'Laravel, HTML, CSS',
            'year'        => '2025',
            'is_featured' => true,
        ]);

        Project::create([
            'title'       => 'Machine Learning Project',
            'slug'        => 'machine-learning-project',
            'description' => 'ML classification project with a simple dashboard.',
            'image'       => 'images/projects/ml-project.jpg',
            'github_url'  => 'https://github.com/your-username/ml-project',
            'demo_url'    => null,
            'tech_stack'  => 'Python, scikit-learn, Matplotlib',
            'year'        => '2023',
            'is_featured' => false,
        ]);
    }
}
