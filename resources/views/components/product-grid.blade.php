@props([
    'products' => collect(),  // products to display
    'title' => null,          // optional title
    'viewMoreUrl' => null,    // optional URL for "View More" button
])

<div class="container py-5">
    @if($title)
        <h2 class="mb-4">{{ $title }}</h2>
    @endif

    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <!-- Image with fixed height and object-fit cover -->
                    <div class="product-img-wrapper">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text mt-auto">${{ number_format($product->price, 2) }}</p>
                        <a href="#" class="btn btn-dark btn-sm mt-2">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($viewMoreUrl)
        <div class="text-center mt-4">
            <a href="{{ $viewMoreUrl }}" class="btn btn-outline-dark">View More</a>
        </div>
    @endif
</div>

<style>
    /* Ensure all images are same height and cover the container */
    .product-img-wrapper {
        width: 100%;
        height: 250px; /* fixed height for all images */
        overflow: hidden;
    }

    .product-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* ensures image covers the div without stretching */
    }

    /* Optional: Make card titles consistent */
    .card-title {
        min-height: 2.5rem; /* ensures titles with different length don't shift layout */
    }
</style>