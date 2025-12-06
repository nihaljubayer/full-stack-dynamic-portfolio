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

            @forelse ($achievements as $achievement)
                <article class="achievement-card">
                    <div class="achievement-header">
                        @php
                            $typeClass = strtolower($achievement->type) === 'certification' ? 'achievement-type cert' : 'achievement-type';
                        @endphp

                        <span class="{{ $typeClass }}">
                            {{ $achievement->type }}
                        </span>

                        @if ($achievement->year)
                            <span class="achievement-year">{{ $achievement->year }}</span>
                        @endif
                    </div>

                    <h2>{{ $achievement->title }}</h2>

                    <h3>{{ $achievement->organization }}</h3>

                    @if ($achievement->description)
                        <p>{{ $achievement->description }}</p>
                    @endif

                    @if ($achievement->link)
                        <p style="margin-top: 0.4rem;">
                            <a href="{{ $achievement->link }}" target="_blank">View details</a>
                        </p>
                    @endif
                </article>
            @empty
                <p>No achievements added yet.</p>
            @endforelse

        </div>

    </section>

@endsection
