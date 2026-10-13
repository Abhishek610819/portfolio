
@extends('layouts.app')

@section('title', 'Services | Abhishek Kumar')
@section('content')
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary-custom fw-bold">WHAT I OFFER</p>
            <h1 class="section-title">My Services</h1>
            <p class="text-secondary">Web development services for individuals and businesses.</p>
        </div>

        @php
            $services = [
                [
                    'icon' => 'bi-code-slash',
                    'title' => 'Laravel Development',
                    'description' => 'Custom web applications, database integration, CRUD operations and backend development.'
                ],
                [
                    'icon' => 'bi-wordpress',
                    'title' => 'WordPress Development',
                    'description' => 'Business websites, theme customization, responsive layouts and website maintenance.'
                ],
                [
                    'icon' => 'bi-cart-check',
                    'title' => 'Shopify Development',
                    'description' => 'Online store setup, theme customization, product pages and storefront improvements.'
                ],
                [
                    'icon' => 'bi-laptop',
                    'title' => 'Responsive Web Design',
                    'description' => 'Mobile-friendly layouts using HTML, CSS, Bootstrap and JavaScript.'
                ],
                [
                    'icon' => 'bi-database',
                    'title' => 'Database Integration',
                    'description' => 'MySQL database design and integration with Laravel applications.'
                ],
                [
                    'icon' => 'bi-tools',
                    'title' => 'Website Maintenance',
                    'description' => 'Bug fixing, updates and improvements to existing websites.'
                ]
            ];
        @endphp

        <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card p-4">
                        <i class="bi {{ $service['icon'] }} fs-1 text-primary-custom"></i>
                        <h2 class="h5 mt-3">{{ $service['title'] }}</h2>
                        <p class="text-secondary mb-0">{{ $service['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4">Discuss Your Project</a>
        </div>
    </div>
</section>
@endsection
