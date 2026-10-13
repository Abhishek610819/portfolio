



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Abhishek Kumar | Web Developer</title>

    <meta name="description"
          content="Abhishek Kumar - Laravel, WordPress and Shopify Developer">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">
<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
  
</head>

<body> --}}

<!-- NAVBAR -->
{{-- <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="brand-logo">AK</span>
            <span>Abhishek Kumar</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
            
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item ms-lg-2">
                    <a href="#contact" class="btn btn-primary px-4">Hire Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
@extends('layouts.app')

@section('title', 'About | Abhishek Kumar')
@section('content')
<!-- HOME -->
<section class="hero" id="home">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="section-label">Hello, I'm</span>

                <h1 class="mt-3 mb-3">
                    Abhishek <span class="text-primary-custom">Kumar</span>
                </h1>

                <h2 class="mb-3">
                    Laravel | WordPress | Shopify Developer
                </h2>

                <p class="mb-4">
                    I build modern, responsive and user-friendly websites
                    and web applications. I have one year of experience at
                    Onav Info Solution, specializing in Laravel, WordPress
                    and Shopify development.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('projects') }}" class="btn btn-primary px-4 py-2">
                        View My Work <i class="bi bi-arrow-up-right"></i>
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-outline-primary px-4 py-2">
                        Contact Me
                    </a>
                </div>

                <div class="row mt-5 g-3">
                    <div class="col-4">
                        <h5 class="fw-bold text-dark mb-1">1 Year</h5>
                        <small>Experience</small>
                    </div>
                    <div class="col-4">
                        <h5 class="fw-bold text-dark mb-1">6</h5>
                        <small>Core Skills</small>
                    </div>
                    <div class="col-4">
                        <h5 class="fw-bold text-dark mb-1">Web</h5>
                        <small>Development</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="hero-image">
                    <div class="developer-circle">
                        <!-- Replace this emoji with your own image -->
                        <span class="developer-emoji">👨🏻‍💻</span>
                    </div>

                    <span class="floating-badge badge-one">Laravel</span>
                    <span class="floating-badge badge-two">WordPress</span>
                    <span class="floating-badge badge-three">Shopify</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Get to know me</span>
            <h2 class="section-title mt-2">About <span class="text-primary-custom">Me</span></h2>
            <p class="section-description">
                My journey, skills and experience in web development.
            </p>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-illustration">
                    <div class="about-initials">AK</div>
                </div>
            </div>

            <div class="col-lg-7">
                <h3 class="fw-bold text-dark mb-3">
                    Passionate Web Developer with a Problem-Solving Mindset
                </h3>

                <p>
                    I am a web developer with one year of experience at
                    Onav Info Solution. I work on responsive websites,
                    web applications, CMS customization and e-commerce.
                </p>

                <p>
                    I enjoy building useful digital experiences with
                    maintainable code and responsive designs.
                </p>

                <div class="my-4">
                    <div class="info-row">
                        <strong><i class="bi bi-briefcase text-primary-custom me-2"></i>Experience</strong>
                        <span>1 Year</span>
                    </div>

                    <div class="info-row">
                        <strong><i class="bi bi-building text-primary-custom me-2"></i>Company</strong>
                        <span>Onav Info Solution</span>
                    </div>

                    <div class="info-row">
                        <strong><i class="bi bi-geo-alt text-primary-custom me-2"></i>Location</strong>
                        <span>Himachal Pradesh, India</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-primary px-4">
                    Let's Work Together <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="custom-card p-4 p-md-5 mt-5">
            <span class="section-label">My journey</span>
            <h4 class="fw-bold text-dark mt-2 mb-3">Professional Experience</h4>

            <div class="border-start border-3 border-primary ps-4 py-2">
                <h5 class="fw-bold text-dark">Web Developer</h5>
                <p class="text-primary-custom fw-semibold mb-1">Onav Info Solution</p>
                <p class="mb-0">
                    One year of experience working with Laravel,
                    WordPress and Shopify development.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section class="bg-light-custom" id="skills">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">My expertise</span>
            <h2 class="section-title mt-2">
                Technologies I Work <span class="text-primary-custom">With</span>
            </h2>
            <p class="section-description">
                Tools and technologies I use to build reliable websites.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-code-square"></i>
                    </div>
                    <h5>Laravel</h5>
                    <p class="small mb-0">Web Application Development</p>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-wordpress"></i>
                    </div>
                    <h5>WordPress</h5>
                    <p class="small mb-0">CMS Development & Customization</p>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-bag"></i>
                    </div>
                    <h5>Shopify</h5>
                    <p class="small mb-0">E-commerce Development</p>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-filetype-html"></i>
                    </div>
                    <h5>HTML5</h5>
                    <p class="small mb-0">Website Structure</p>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-filetype-css"></i>
                    </div>
                    <h5>CSS3</h5>
                    <p class="small mb-0">Styling & Responsive Design</p>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="custom-card text-center p-4">
                    <div class="skill-icon mb-3">
                        <i class="bi bi-filetype-js"></i>
                    </div>
                    <h5>JavaScript</h5>
                    <p class="small mb-0">Interactive Functionality</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">My portfolio</span>
            <h2 class="section-title mt-2">
                Featured <span class="text-primary-custom">Projects</span>
            </h2>
            <p class="section-description">
                Example projects showcasing web development capabilities.
            </p>
        </div>

        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="custom-card project-card overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-airplane"></i>
                    </div>

                    <div class="p-4">
                        <span class="project-tag">WordPress</span>
                        <h5 class="mt-3">Travel & Tour Website</h5>
                        <p class="small">
                            A responsive travel website with destination
                            information, tour packages and booking details.
                        </p>
                        <a href="{{ route('contact') }}" class="text-primary-custom fw-bold text-decoration-none">
                            Discuss a Similar Project <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="custom-card project-card overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-cart3"></i>
                    </div>

                    <div class="p-4">
                        <span class="project-tag">Shopify</span>
                        <h5 class="mt-3">E-commerce Store</h5>
                        <p class="small">
                            An online storefront with product listings,
                            shopping features and responsive layouts.
                        </p>
                        <a href="{{ route('contact') }}" class="text-primary-custom fw-bold text-decoration-none">
                            Discuss a Similar Project <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="custom-card project-card overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-speedometer2"></i>
                    </div>

                    <div class="p-4">
                        <span class="project-tag">Laravel</span>
                        <h5 class="mt-3">Admin Dashboard</h5>
                        <p class="small">
                            An administration interface concept for managing
                            application data and business information.
                        </p>
                        <a href="{{ route('contact') }}" class="text-primary-custom fw-bold text-decoration-none">
                            Discuss a Similar Project <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="bg-light-custom" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">What I offer</span>
            <h2 class="section-title mt-2">
                My <span class="text-primary-custom">Services</span>
            </h2>
            <p class="section-description">
                Web development services for businesses and individuals.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="custom-card service-card p-4">
                    <div class="service-icon mb-4">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h5>Laravel Development</h5>
                    <p class="small mb-0">
                        Custom web applications, database integration
                        and backend development.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card service-card p-4">
                    <div class="service-icon mb-4">
                        <i class="bi bi-wordpress"></i>
                    </div>
                    <h5>WordPress Development</h5>
                    <p class="small mb-0">
                        Business websites, theme customization
                        and CMS development.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card service-card p-4">
                    <div class="service-icon mb-4">
                        <i class="bi bi-shop"></i>
                    </div>
                    <h5>Shopify Development</h5>
                    <p class="small mb-0">
                        Online stores, storefront customization
                        and e-commerce solutions.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card service-card p-4">
                    <div class="service-icon mb-4">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h5>Website Maintenance</h5>
                    <p class="small mb-0">
                        Website updates, bug fixes and ongoing
                        technical support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Let's connect</span>
            <h2 class="section-title mt-2">
                Get In <span class="text-primary-custom">Touch</span>
            </h2>
            <p class="section-description">
                Have a project in mind? Let's discuss your requirements.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-box h-100">
                    <h4 class="fw-bold text-dark mb-2">Contact Information</h4>
                    <p class="text-muted mb-4">
                        Connect with me through my social profiles.
                    </p>

                    <div class="d-flex gap-3 align-items-center mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Location</h6>
                            <p class="small mb-0">Himachal Pradesh, India</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 align-items-center mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-github"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">GitHub</h6>
                            <a href="https://github.com/"
                               target="_blank" rel="noopener noreferrer"
                               class="small text-primary-custom">
                                Visit GitHub Profile
                            </a>
                        </div>
                    </div>

                    <div class="d-flex gap-3 align-items-center mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-linkedin"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">LinkedIn</h6>
                            <a href="https://www.linkedin.com/"
                               target="_blank" rel="noopener noreferrer"
                               class="small text-primary-custom">
                                Visit LinkedIn Profile
                            </a>
                        </div>
                    </div>

                    <hr>

                    <p class="small mb-0">
                        Replace the social links above with your actual profiles.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <!-- STATIC FORM: no backend and no submission -->
                <form class="contact-box" onsubmit="return false;">
                    <h4 class="fw-bold text-dark mb-4">Send Me a Message</h4>

                    <div class="mb-3">
                        <label for="contactName" class="form-label fw-semibold">
                            Your Name
                        </label>
                        <input type="text" class="form-control"
                               id="contactName" placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label for="contactEmail" class="form-label fw-semibold">
                            Email Address
                        </label>
                        <input type="email" class="form-control"
                               id="contactEmail" placeholder="Enter your email">
                    </div>

                    <div class="mb-4">
                        <label for="contactMessage" class="form-label fw-semibold">
                            Your Message
                        </label>
                        <textarea class="form-control" id="contactMessage"
                                  rows="5" placeholder="Tell me about your project"></textarea>
                    </div>

                    <button type="button" class="btn btn-primary w-100 py-3"
                            onclick="alert('This is a static demo form. No message has been sent.')">
                        Send Message <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                    <p class="small text-muted mt-3 mb-0">
                        Static demo only. This form does not store or send information.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- FOOTER -->
{{-- <footer class="footer">
    <div class="container">
        <div class="row g-4 pb-4">
            <div class="col-md-7">
                <a href="{{ route('home') }}" class="navbar-brand text-white">
                    <span class="brand-logo">AK</span>
                    Abhishek Kumar
                </a>

                <p class="mt-3">
                    Laravel | WordPress | Shopify Developer
                </p>

                <p class="small">
                    Building useful digital experiences with modern web technologies.
                </p>

                <div class="mt-3">
                    <a href="https://github.com/" target="_blank"
                       rel="noopener noreferrer" class="social-link"
                       aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="https://www.linkedin.com/" target="_blank"
                       rel="noopener noreferrer" class="social-link"
                       aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-5">
                <h6 class="fw-bold text-white mb-3">Quick Links</h6>
                <div class="row g-2">
                    <div class="col-6"><a href="#home">Home</a></div>
                    <div class="col-6"><a href="#about">About</a></div>
                    <div class="col-6"><a href="#skills">Skills</a></div>
                    <div class="col-6"><a href="#projects">Projects</a></div>
                    <div class="col-6"><a href="#services">Services</a></div>
                    <div class="col-6"><a href="#contact">Contact</a></div>
                </div>
            </div>
        </div>

        <hr class="border-secondary">

        <p class="text-center small mb-0">
            &copy; <span id="currentYear"></span> Abhishek Kumar. All rights reserved.
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('currentYear').textContent =
        new Date().getFullYear();

    // Close mobile navigation after clicking a section link
    document.querySelectorAll('#mainNavbar .nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            const menu = document.getElementById('mainNavbar');
            const instance = bootstrap.Collapse.getInstance(menu);

            if (instance) {
                instance.hide();
            }
        });
    });
</script>

</body>
</html> --}}
