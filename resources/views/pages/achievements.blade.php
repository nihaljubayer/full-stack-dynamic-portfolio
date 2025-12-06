@extends('layouts.app')

@section('title', 'Achievements')

@section('content')

    <header class="page-header">
        <h1>Achievements</h1>
        <p class="page-subtitle">
            A collection of awards, competitions, and certifications I’ve earned along my journey.
        </p>
    </header>

    <section class="achievements-section">

        <div class="achievements-grid">

            {{-- Example Achievement 1 --}}
            <article class="achievement-card">
                <div class="achievement-header">
                    <span class="achievement-type">Competition</span>
                    <span class="achievement-year">2024</span>
                </div>
                <h2>Champion – University Programming Contest</h2>
                <h3>Your University Name</h3>
                <p>
                    Solved algorithmic problems in a time-constrained environment as part of a team,
                    focusing on data structures, graph algorithms, and dynamic programming.
                </p>
            </article>

            {{-- Example Achievement 2 --}}
            <article class="achievement-card">
                <div class="achievement-header">
                    <span class="achievement-type cert">Certification</span>
                    <span class="achievement-year">2023</span>
                </div>
                <h2>Machine Learning Specialization</h2>
                <h3>Online Platform (Coursera / Udemy etc.)</h3>
                <p>
                    Completed a series of courses covering supervised learning, model evaluation, 
                    and practical ML workflows using Python.
                </p>
            </article>

            {{-- Example Achievement 3 --}}
            <article class="achievement-card">
                <div class="achievement-header">
                    <span class="achievement-type">Hackathon</span>
                    <span class="achievement-year">2023</span>
                </div>
                <h2>Top 5 – City-Level Hackathon</h2>
                <h3>Organizer Name</h3>
                <p>
                    Built a prototype web application in less than 24 hours to solve a real-world problem,
                    collaborating with a cross-functional team.
                </p>
            </article>

            {{-- Example Achievement 4 --}}
            <article class="achievement-card">
                <div class="achievement-header">
                    <span class="achievement-type">Award</span>
                    <span class="achievement-year">2022</span>
                </div>
                <h2>Dean’s List / Academic Excellence Award</h2>
                <h3>Your University Name</h3>
                <p>
                    Recognized for maintaining a strong academic performance throughout the semester/year.
                </p>
            </article>

        </div>

    </section>

@endsection
