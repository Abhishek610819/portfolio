{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    @include('layout.header')
    <div class="container-fluid hero-section">
        <div class="container d-flex cstm-hero-section-inner">
           <div class="content w-50 align-middle">
             <h1>Abhishek Kumar</h1>
              <p>I create modern, responsive, and user-friendly websites using Laravel, WordPress, and Shopify. My focus is on building functional, attractive, and mobile-friendly websites that meet business requirements and provide a great user experience.
            My Expertise:</p>
            </div>
            <div class="image w-50">
              <img src="{{ asset('front/assets/images/abhishekimgg.jpeg') }}" alt="Hero Image" class="img-fluid">
            </div>   
        </div> 
    </div>

<div class="container-fluid about-section">
    <div class="container d-flex cstm-about-section-inner">
        <div class="left">
            <div class="cstm-aboutus-head">
            <h1>About Me</h1>
            </div>
            <div class="image w-50">

            <img src="{{ asset('front/assets/images/abhishekimgg.jpeg') }}" alt="Hero Image" class="img-fluid">
            </div> 
        </div>
        <div class="content w-50 align-middle">
          
            <p>I am a skilled web developer with expertise in Laravel, WordPress, and Shopify. I specialize in creating modern, responsive, and user-friendly websites that meet business requirements and provide a great user experience. My focus is on building functional, attractive, and mobile-friendly websites that help businesses succeed online.</p>
        </div>
    </div>
</div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abhishek Kumar — Laravel, WordPress and Shopify developer.">
    <title>Abhishek Kumar | Web Developer</title>

        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="container nav">
        <a class="brand" href="#home"><span>AK</span> Abhishek Kumar</a>

        <button class="menu-toggle" id="menuToggle"
                aria-label="Toggle navigation" aria-expanded="false">
            ☰
        </button>

        <nav class="nav-links" id="navLinks">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a class="btn btn-primary nav-cta" href="#contact">Hire Me</a>
        </nav>
    </div>
</header>

<main>
    <!-- 1. HOME -->
    <section class="hero section" id="home">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="eyebrow">HELLO, I'M</span>
                <h1>Abhishek <span>Kumar</span></h1>
                <h2>Laravel | WordPress | Shopify Developer</h2>

                <p>
                    I build modern, responsive and user-friendly websites
                    and web applications. I have one year of experience at
                    Onav Info Solution, specializing in Laravel, WordPress
                    and Shopify development.
                </p>

                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">View My Work ↗</a>
                    <a href="#contact" class="btn btn-outline">Contact Me</a>
                </div>

                <div class="hero-stats">
                    <div><strong>1 Year</strong><small>Experience</small></div>
                    <div><strong>6 Skills</strong><small>Core Technologies</small></div>
                    <div><strong>Web</strong><small>Development</small></div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-circle"></div>
                <div class="developer-placeholder">
                    <span>👨‍💻</span>
                    <strong>Web Developer</strong>
                    <small>Building digital experiences</small>
                </div>
                <span class="floating-tag tag-laravel">Laravel</span>
                <span class="floating-tag tag-wordpress">WordPress</span>
                <span class="floating-tag tag-shopify">Shopify</span>
            </div>
        </div>
    </section>

    <!-- 2. ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">GET TO KNOW ME</span>
                <h2>About <span>Me</span></h2>
                <p>My journey, skills and experience in web development.</p>
            </div>

            <div class="about-grid">
                <div class="about-art">
                    <div class="about-initials">AK</div>
                    <p>Code. Create. Improve.</p>
                </div>

                <div class="about-content">
                    <h3>A passionate web developer with a problem-solving mindset</h3>
                    <p>
                        I am a web developer with one year of experience at
                        Onav Info Solution. I work on responsive websites,
                        web applications, content management systems and
                        e-commerce solutions.
                    </p>
                    <p>
                        My focus is writing maintainable code and creating
                        straightforward digital experiences that work well
                        across devices.
                    </p>

                    <div class="info-list">
                        <div><strong>Experience</strong><span>1 Year</span></div>
                        <div><strong>Company</strong><span>Onav Info Solution</span></div>
                        <div><strong>Location</strong><span>Himachal Pradesh, India</span></div>
                        <div><strong>Specialization</strong><span>Web Development</span></div>
                    </div>

                    <a href="#contact" class="btn btn-primary">Let's Work Together ↗</a>
                </div>
            </div>

            <div class="journey-panel">
                <span class="eyebrow">MY JOURNEY</span>
                <h3>Professional Experience</h3>
                <div class="timeline">
                    <div class="timeline-dot"></div>
                    <div>
                        <h4>Web Developer — Onav Info Solution</h4>
                        <p class="muted">1 year of experience</p>
                        <p>
                            Working with Laravel, WordPress and Shopify to
                            build and customize web experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SKILLS -->
    <section class="section section-soft" id="skills">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">MY EXPERTISE</span>
                <h2>Technologies I Work <span>With</span></h2>
                <p>Tools and technologies I use to build reliable websites.</p>
            </div>

            <div class="skills-grid">
                @foreach($skills as $skill)
                    <article class="skill-card">
                        <div class="skill-icon">{{ $skill['icon'] }}</div>
                        <h3>{{ $skill['name'] }}</h3>
                        <p>{{ $skill['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. PROJECTS -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">MY PORTFOLIO</span>
                <h2>Featured <span>Projects</span></h2>
                <p>A selection of web development project examples.</p>
            </div>

            <div class="projects-grid">
                @foreach($projects as $project)
                    <article class="project-card">
                        <div class="project-image">
                            <img
                                src="{{ asset($project['image']) }}"
                                alt="{{ $project['title'] }}"
                                loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';"
                            >
                            <div class="image-fallback">
                                <span>{{ $project['category'] }}</span>
                            </div>
                        </div>

                        <div class="project-body">
                            <span class="project-category">{{ $project['category'] }}</span>
                            <h3>{{ $project['title'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                            <a href="#contact" class="text-link">
                                Discuss a Similar Project ↗
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. SERVICES -->
    <section class="section section-soft" id="services">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">WHAT I OFFER</span>
                <h2>My <span>Services</span></h2>
                <p>Web development services for businesses and individuals.</p>
            </div>

            <div class="services-grid">
                @foreach($services as $service)
                    <article class="service-card">
                        <div class="service-number">{{ $service['icon'] }}</div>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                        <a href="#contact" class="text-link">Discuss your project ↗</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">LET'S CONNECT</span>
                <h2>Get In <span>Touch</span></h2>
                <p>Have a project in mind? Let's discuss your requirements.</p>
            </div>

            @if(session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p class="muted">Connect with me through my social profiles.</p>

                    <div class="contact-item">
                        <span class="contact-icon">⌖</span>
                        <div>
                            <strong>Location</strong>
                            <p>Himachal Pradesh, India</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span class="contact-icon">GH</span>
                        <div>
                            <strong>GitHub</strong>
                            <p><a href="https://github.com/" target="_blank"
                                  rel="noopener noreferrer">Visit GitHub profile ↗</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span class="contact-icon">in</span>
                        <div>
                            <strong>LinkedIn</strong>
                            <p><a href="https://www.linkedin.com/" target="_blank"
                                  rel="noopener noreferrer">Visit LinkedIn profile ↗</a></p>
                        </div>
                    </div>
                </div>

                <form class="contact-form" action="{{ route('portfolio.contact') }}" method="POST">
                    @csrf

                    <label for="name">Your Name</label>
                    <input id="name" type="text" name="name"
                           value="{{ old('name') }}" placeholder="Enter your name"
                           maxlength="100" required>

                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email"
                           value="{{ old('email') }}" placeholder="Enter your email"
                           maxlength="255" required>

                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5"
                              maxlength="3000" placeholder="Tell me about your project"
                              required>{{ old('message') }}</textarea>

                    <button type="submit" class="btn btn-primary btn-full">
                        Send Message ↗
                    </button>
                    <small class="muted">Email delivery must be configured in Laravel.</small>
                </form>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER -->
<footer class="footer">
    <div class="container footer-grid">
        <div>
            <a class="brand footer-brand" href="#home"><span>AK</span> Abhishek Kumar</a>
            <p>Laravel | WordPress | Shopify Developer</p>
            <p class="footer-muted">Building useful digital experiences.</p>
        </div>

        <div>
            <h4>Quick Links</h4>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </div>

    <div class="container copyright">
        © {{ date('Y') }} Abhishek Kumar. All rights reserved.
    </div>
</footer>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', function () {
        const isOpen = navLinks.classList.toggle('active');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
    });

    navLinks.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
</script>

</body>
</html> --}}



<!DOCTYPE html>
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

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#home">
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
                {{-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item ms-lg-2">
                    <a href="#contact" class="btn btn-primary px-4">Hire Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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

<!-- FOOTER -->
<footer class="footer">
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
</html>
