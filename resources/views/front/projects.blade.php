
@extends('layouts.app')

@section('title', 'Projects | Abhishek Kumar')
@section('content')
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary-custom fw-bold">MY PORTFOLIO</p>
            <h1 class="section-title">Recent Projects</h1>
            <p class="text-secondary">A selection of web development projects.</p>
        </div>

        @php
            $projects = [
                [
                    'title' => 'Business Management System',
                    'category' => 'Laravel',
                    'description' => 'A web application concept for managing business information and records.',
                    'icon' => 'bi-kanban'
                ],
                [
                    'title' => 'Business Website',
                    'category' => 'WordPress',
                    'description' => 'A responsive website concept for presenting business services online.',
                    'icon' => 'bi-globe'
                ],
                [
                    'title' => 'Online Shopping Store',
                    'category' => 'Shopify',
                    'description' => 'An e-commerce store concept for displaying products and helping customers shop.',
                    'icon' => 'bi-cart3'
                ]
            ];
        @endphp

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card bg-white">
                        <div class="p-5 text-center" style="background:#eaf1ff">
                            <i class="bi {{ $project['icon'] }} display-2 text-primary-custom"></i>
                        </div>
                        <div class="p-4">
                            <span class="badge text-bg-primary mb-3">{{ $project['category'] }}</span>
                            <h2 class="h5">{{ $project['title'] }}</h2>
                            <p class="text-secondary">{{ $project['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="text-secondary text-center mt-4">
            Replace these sample projects with your actual work and project links.
        </p>
    </div>
</section>
@endsection
