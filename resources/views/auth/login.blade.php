@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">

        <!-- LEFT: Login Form -->
        <div class="col-lg-5 d-flex justify-content-center">
            <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
                <h3 class="mb-4 text-center">Login</h3>

                @if($errors->any())
                    <div class="alert alert-danger text-center">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Login</button>
                </form>

                <div class="mt-3 text-center">
                    <p>Don't have an account? <a href="/register">Register here</a></p>
                </div>
            </div>
        </div>

        <!-- RIGHT: Hero Component -->
        <div class="col-lg-7 d-none d-lg-block">
            <x-hero-banner />
        </div>

    </div>
</div>
@endsection