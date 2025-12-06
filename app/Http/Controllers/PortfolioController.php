<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;
use App\Models\Achievement;

class PortfolioController extends Controller
{
    public function home()
    {
        $featuredProjects = Project::where('is_featured', true)->take(3)->get();

        return view('pages.home', compact('featuredProjects'));
    }

    public function projects()
    {
        // THIS is what feeds the Projects page
        $projects = Project::orderByDesc('year')->get();

        return view('pages.projects', compact('projects'));
    }

    public function skills()
    {
        $technicalSkills = Skill::where('category', 'technical')
            ->orderBy('display_order')
            ->get();

        $softSkills = Skill::where('category', 'soft')
            ->orderBy('display_order')
            ->get();

        $tools = Skill::where('category', 'tool')
            ->orderBy('display_order')
            ->get();

        return view('pages.skills', compact('technicalSkills', 'softSkills', 'tools'));
    }
    public function academic()
{
    $academics = Academic::orderBy('display_order')->get();

    return view('pages.academic', compact('academics'));
}
public function achievements()
{
    $achievements = Achievement::orderBy('display_order')->get();

    return view('pages.achievements', compact('achievements'));
}

}
