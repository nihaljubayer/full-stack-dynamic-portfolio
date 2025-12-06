@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php use Illuminate\Support\Str; @endphp


{{-- HERO SECTION --}}
<section class="hero">
    <div class="hero-text">
        <h1>Hi, I am <span>Nihal</span></h1>
        <p class="subtitle">
            Final year CSE student passionate about <strong>web development</strong>, 
            <strong>machine learning</strong>, and <strong>software engineering</strong>.
        </p>

        <a href="{{ url('/projects') }}" class="btn-primary">View My Projects</a>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image">
    </div>
</section>

{{-- FEATURED PROJECTS --}}
<section class="featured-projects">
    <h2>Featured Projects</h2>

    <div class="project-grid">
        @forelse ($featuredProjects as $project)
            <div class="project-card">
                
                {{-- Image --}}
                @if ($project->image)
                    <img src="{{ asset($project->image) }}" class="fp-image" alt="{{ $project->title }}">
                @endif

                <h3>{{ $project->title }}</h3>

                {{-- Short description --}}
                <p>{{ Str::limit($project->description, 120) }}</p>

                {{-- Tags --}}
                @if ($project->tech_stack)
                    <ul class="project-tags">
                        @foreach (explode(',', $project->tech_stack) as $tag)
                            <li>{{ trim($tag) }}</li>
                        @endforeach
                    </ul>
                @endif

                {{-- Links --}}
                <div class="project-links">
                    @if ($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                    @endif

                    @if ($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank">Live Demo</a>
                    @endif
                </div>
            </div>
        @empty
            <p>No featured projects yet.</p>
        @endforelse
    </div>
</section>


@endsection
