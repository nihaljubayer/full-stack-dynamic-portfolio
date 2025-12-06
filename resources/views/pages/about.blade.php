@extends('layouts.app')

@section('title', 'About')

@section('content')

    <header class="page-header">
        <h1>About Me</h1>
        <p class="page-subtitle">
            A brief introduction about who I am, what I do, and what I’m passionate about.
        </p>
    </header>

    <section class="about-section">

        {{-- LEFT: Image --}}
        <div class="about-image">
            {{-- Use your own image path --}}
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo">
        </div>

        {{-- RIGHT: Text --}}
        <div class="about-content">
            <h2>Hi, I’m Nihal</h2>
            <p class="about-intro">
                I’m a final-year Computer Science &amp; Engineering student with a strong interest in
                <strong>web development</strong>, <strong>machine learning</strong>, and building
                real-world software solutions. I enjoy turning ideas into practical applications and
                continuously improving my skills.
            </p>

            {{-- Basic info --}}
            <div class="about-details">
                <div class="detail-row">
                    <span class="label">Name:</span>
                    <span class="value">Md. Jubayer Islam</span>
                </div>
                <div class="detail-row">
                    <span class="label">Email:</span>
                    <span class="value">nihaljubayer777@gmail.com</span>
                </div>
                <div class="detail-row">
                    <span class="label">Location:</span>
                    <span class="value">Cumilla, Portugal</span>
                </div>
                <div class="detail-row">
                    <span class="label">Interests:</span>
                    <span class="value">Web Dev, ML, Remote Work, Open Source</span>
                </div>
            </div>

            {{-- Interests / Goals --}}
            <div class="about-extra">
                <h3>What I’m Looking For</h3>
                <p>
                    I’m interested in opportunities such as <strong>remote internships</strong>,
                    <strong>junior developer roles</strong>, or <strong>research projects</strong> related to
                    web development and machine learning. I love learning from others, contributing to teams,
                    and working on impactful projects.
                </p>

                <h3 style="margin-top: 1rem;">Outside of Coding</h3>
                <p>
                    Outside of programming, I enjoy exploring new technologies, reading about startups,
                    and learning about social impact through technology.
                </p>
            </div>

        </div>

    </section>

@endsection
