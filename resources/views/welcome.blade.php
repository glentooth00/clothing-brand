@extends('layouts.app')

@section('content')

<!-- Hero Banner -->
<x-hero-banner />

<!-- Featured Products Gallery -->
<x-product-gallery :products="$products" title="Featured Products" viewMoreUrl="{{ route('collections') }}" />

<!-- About Section -->
<div class="container py-5 text-center">
    <h2>Welcome to MyBrand</h2>
    <p class="lead">
        Discover high-quality fashion curated for your lifestyle. Our collections focus on style, comfort, and lasting quality.
    </p>
</div>

<!-- Call-to-Action / Newsletter -->
<div class="bg-dark text-white py-5">
    <div class="container text-center">
        <h3>Stay Updated</h3>
        <p>Subscribe to our newsletter to get the latest arrivals and exclusive offers.</p>
        <form class="row justify-content-center g-2">
            <div class="col-md-4">
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-warning">Subscribe</button>
            </div>
        </form>
    </div>
</div>

@endsection