@extends('layouts.app')

@section('title', 'Home')

@section('content')

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
        <!-- Later replace with database loop -->
        <div class="project-card">
            <h3>Project One</h3>
            <p>Short description of your project. Showcases your work.</p>
        </div>

        <div class="project-card">
            <h3>Project Two</h3>
            <p>Short description of another featured project.</p>
        </div>

        <div class="project-card">
            <h3>Project Three</h3>
            <p>This section will automatically load real data later.</p>
        </div>
    </div>
</section>

@endsection
