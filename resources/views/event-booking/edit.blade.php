@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light"><br><br><span class="fs-1">CONTACT US</span></div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center my-5">
        <div class="col-md-3">
            <div class="card shadow-none p-5 mb-4">
                <i class="bi bi-geo-alt display-5 text-warning mb-2"></i>
                <h5 class="mb-1 fw-bold">ADDRESS</h5>
                <div class="text-muted lead1">
                    Kenya Institute Of Primate Research (KIPRE)
                </div>
            </div>
            <div class="card shadow-none p-5 mb-4">
                <i class="bi bi-envelope display-5 text-warning mb-2"></i>
                <h5 class="mb-1 fw-bold">Email</h5>
                <div class="text-muted">
                    <a href="mailto:isc2025@kipre.go.ke">isc2025@kipre.go.ke</a>
                    <a href="mailto:info@kipre.go.ke">info@kipre.go.ke</a>
                </div>
            </div>
            <div class="card shadow-none p-5 mb-4">
                <i class="bi bi-telephone display-5 text-warning mb-2"></i>
                <h5 class="mb-1 fw-bold">PHONE</h5>
                <div class="text-muted lead1">
                   +254 (0)20 260 623 5
                </div>
            </div>
            <div class="card shadow-none p-5 mb-4">
                <i class="bi bi-share display-5 text-warning mb-2"></i>
                <h5 class="mb-2 fw-bold">SOCIAL MEDIA</h5>
                <div class="d-grid gap-2 d-md-block">
                    <a href="https://www.facebook.com/p/Institute-of-Primate-Research-IPR-100068513560024/" target="_blank" class="btn btn-outline-dark"><i class="bi bi-facebook"></i></a>
                    <a href="https://x.com/primateresearch?lang=en" target="_blank" class="btn btn-outline-dark"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/kenya-institute-of-primate-research/?originalSubdomain=ke" target="_blank" class="btn btn-outline-dark"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="px-4">
                <h5 class="text-danger">CONTACT INFO</h5>
                <div class="display-5 fw-bold">Get Meeting With us.</div>
                <form method="POST" action="/contact-us">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="name" class="col-form-label">Your Name:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="col-form-label">Email Address:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="col-form-label">Phone Number:</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="subject" class="col-form-label">Subject:</label>
                            <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" required>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="message" class="col-form-label">Your Message:</label>
                            <textarea id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" required></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning">Submit Now</button>
                    </div>
                </form>
                <div class="my-5">
                    <iframe style='width:100%; height:100%; min-height:50vh;' class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.697498227714!2d36.704397274965636!3d-1.3581244986290104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0579df540b85%3A0x45549ccd6b80919d!2sKenya%20Institute%20Of%20Primate%20Research%20(KIPRE)!5e0!3m2!1sen!2ske!4v1746434737053!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
