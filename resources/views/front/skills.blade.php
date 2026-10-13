
@extends('layouts.app')

@section('title', 'Skills | Abhishek Kumar')
@section('content')
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary-custom fw-bold">MY EXPERTISE</p>
            <h1 class="section-title">Technical Skills</h1>
            <p class="text-secondary">Technologies I use to build websites and applications.</p>
        </div>

        @php
            $skills = [
                ['PHP', 85],
                ['Laravel', 85],
                ['WordPress', 80],
                ['Shopify', 75],
                ['HTML & CSS', 90],
                ['JavaScript', 70],
                ['Bootstrap', 85],
                ['MySQL', 75]
            ];
        @endphp

        <div class="row g-4">
            @foreach ($skills as $skill)
                <div class="col-md-6">
                    <div class="portfolio-card p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <h2 class="h6 mb-0">{{ $skill[0] }}</h2>
                            <span class="text-secondary">{{ $skill[1] }}%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar" role="progressbar"
                                 style="width: {{ $skill[1] }}%;"
                                 aria-valuenow="{{ $skill[1] }}"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
