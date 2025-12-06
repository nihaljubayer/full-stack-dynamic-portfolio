@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <header class="page-header">
        <h1>Projects</h1>
        <p class="page-subtitle">
            A selection of the work I’ve done in web development, machine learning, and other areas.
        </p>
    </header>

    <section class="projects-section">
        <div class="projects-grid">

            @forelse ($projects as $project)
                <article class="project-card">
                    @if ($project->image)
                        <div class="project-image">
                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                        </div>
                    @endif

                    <div class="project-content">
                        <h2>{{ $project->title }}</h2>

                        @if ($project->year)
                            <p style="font-size: 0.8rem; color:#6b7280; margin-bottom: 0.3rem;">
                                {{ $project->year }}
                            </p>
                        @endif

                        @if ($project->description)
                            <p>{{ $project->description }}</p>
                        @endif

                        @if ($project->tech_stack)
                            <ul class="project-tags">
                                @foreach (explode(',', $project->tech_stack) as $tag)
                                    <li>{{ trim($tag) }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="project-links">
                            @if ($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                            @endif
                            @if ($project->demo_url)
                                <a href="{{ $project->demo_url }}" target="_blank">Live Demo</a>
                            @endif
                        </div>
                    </div>
                </article>
            @empty
                <p>No projects found yet.</p>
            @endforelse

        </div>
    </section>

@endsection
