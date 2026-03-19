@extends('layouts.app')

@section('content')
<div class="row justify-content-center py-5">
    <!-- Contact Form -->
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm p-4 h-100">
            <h3 class="mb-4">Contact Us</h3>

            <form method="POST" action="">
                {{-- {{ route('contact.submit') }} --}}
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control border-bottom" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control border-bottom" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control border-bottom" id="subject" name="subject" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control border-bottom" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-dark w-100">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="col-md-4">
        <div class="card shadow-sm p-4 h-100">
            <h4 class="mb-3">Get in Touch</h4>
            <p>We’d love to hear from you! Reach out with any questions or feedback.</p>

            <p class="mb-1"><strong>Email:</strong> support@mybrand.com</p>
            <p class="mb-1"><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Address:</strong> 123 Fashion Street, Style City</p>

            <hr>

            <h5>Follow Us</h5>
            <div class="d-flex gap-3 mt-2">
                <a href="#" class="text-dark"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection