
@extends('layouts.app')

@section('title', 'About | Abhishek Kumar')
@section('content')
<section class="section section-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-4 text-center">
                <div class="profile-circle">
                    <i class="bi bi-person-workspace"></i>
                </div>
            </div>
            <div class="col-md-8">
                <p class="text-primary-custom fw-bold">ABOUT ME</p>
                <h1 class="section-title">A Little About Me</h1>
                <p class="text-secondary">
                    I'm Abhishek Kumar, a web developer interested in building
                    modern, responsive, and user-friendly websites.
                </p>
                <p class="text-secondary">
                    I have one year of working experience at Onav Info Solution.
                    My work focuses on Laravel, WordPress, Shopify, and frontend
                    technologies.
                </p>
                <div class="portfolio-card p-4 bg-white mt-4">
                    <h2 class="h5">Work Experience</h2>
                    <h3 class="h6 text-primary-custom">Web Developer</h3>
                    <p class="mb-1 fw-semibold">Onav Info Solution</p>
                    <p class="text-secondary mb-0">1 year of experience</p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary mt-4">Let's Work Together</a>
            </div>
        </div>
    </div>
</section>
@endsection
