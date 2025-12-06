@extends('layouts.app')

@section('title', 'Academic')

@section('content')

    <header class="page-header">
        <h1>Academic Background</h1>
        <p class="page-subtitle">
            My formal education journey in Computer Science and related fields.
        </p>
    </header>

    <section class="academic-section">

        <div class="timeline">

            @forelse ($academics as $academic)
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">
                            {{ $academic->start_year }}
                            –
                            {{ $academic->end_year ?? 'Present' }}
                        </span>

                        <h2>{{ $academic->degree }}</h2>
                        <h3>
                            {{ $academic->institution }}
                            @if ($academic->location)
                                — {{ $academic->location }}
                            @endif
                        </h3>

                        @if ($academic->result)
                            <p><strong>{{ $academic->result }}</strong></p>
                        @endif

                        @if ($academic->description)
                            <p>{{ $academic->description }}</p>
                        @endif
                    </div>
                </div>
            @empty
                <p>No academic records found yet.</p>
            @endforelse

        </div>

    </section>

@endsection
