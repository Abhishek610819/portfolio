
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Abhishek Kumar | Web Developer')</title>
    <meta name="description" content="@yield('description', 'Portfolio of Abhishek Kumar, Laravel, WordPress and Shopify developer.')">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    
    {{-- @stack('styles') --}}
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Abhishek<span class="text-dark">.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li> --}}
                <li class="nav-item">
                    <a class="btn btn-primary rounded-pill px-4" href="{{ route('contact') }}">Contact Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <p class="mb-0">© {{ date('Y') }} Abhishek Kumar. All rights reserved.</p>
        <div class="d-flex gap-3">
            <a href="https://github.com/" target="_blank" rel="noopener">GitHub</a>
            <a href="https://www.linkedin.com/" target="_blank" rel="noopener">LinkedIn</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
