
@extends('layouts.app')

@section('title', 'Contact | Abhishek Kumar')
@section('content')
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary-custom fw-bold">GET IN TOUCH</p>
            <h1 class="section-title">Contact Me</h1>
            <p class="text-secondary">Have a project in mind? Let's discuss it.</p>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-lg-4">
                <div class="portfolio-card bg-white p-4">
                    <h2 class="h5 mb-4">Let's Connect</h2>
                    <p><i class="bi bi-code-slash text-primary-custom me-2"></i> Web Developer</p>
                    <p><i class="bi bi-briefcase text-primary-custom me-2"></i> Onav Info Solution</p>
                    <p><i class="bi bi-clock text-primary-custom me-2"></i> 1 year of experience</p>
                    <hr>
                    <a class="d-block mb-3" href="https://github.com/" target="_blank" rel="noopener">
                        <i class="bi bi-github me-2"></i> GitHub
                    </a>
                    <a class="d-block" href="https://www.linkedin.com/" target="_blank" rel="noopener">
                        <i class="bi bi-linkedin me-2"></i> LinkedIn
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="portfolio-card bg-white p-4 p-md-5">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}" required maxlength="150">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required maxlength="255">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea id="message" name="message" rows="5"
                                      class="form-control @error('message') is-invalid @enderror"
                                      required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-send me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
