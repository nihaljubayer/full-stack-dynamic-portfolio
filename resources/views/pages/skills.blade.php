@extends('layouts.app')

@section('title', 'Skills')

@section('content')

    <header class="page-header">
        <h1>Skills</h1>
        <p class="page-subtitle">
            Technologies and tools I use to build projects in web development and machine learning.
        </p>
    </header>

    <section class="skills-section">

        {{-- TECHNICAL SKILLS --}}
        <div class="skills-group">
            <h2>Technical Skills</h2>

            <div class="skills-grid">
                @forelse ($technicalSkills as $skill)
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>{{ $skill->name }}</span>
                            @if (!is_null($skill->level))
                                <span>{{ $skill->level }}%</span>
                            @endif
                        </div>
                        @if (!is_null($skill->level))
                            <div class="skill-bar">
                                <div class="skill-bar-fill" style="width: {{ $skill->level }}%;"></div>
                            </div>
                        @endif
                    </div>
                @empty
                    <p>No technical skills added yet.</p>
                @endforelse
            </div>
        </div>

        {{-- SOFT SKILLS --}}
        <div class="skills-group">
            <h2>Soft Skills</h2>

            @if ($softSkills->isEmpty())
                <p>No soft skills added yet.</p>
            @else
                <ul class="soft-skills-list">
                    @foreach ($softSkills as $skill)
                        <li>{{ $skill->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        {{-- TOOLS --}}
        <div class="skills-group">
            <h2>Tools &amp; Platforms</h2>

            @if ($tools->isEmpty())
                <p>No tools added yet.</p>
            @else
                <div class="skills-tags">
                    @foreach ($tools as $skill)
                        <span>{{ $skill->name }}</span>
                    @endforeach
                </div>
            @endif
        </div>

    </section>

@endsection
