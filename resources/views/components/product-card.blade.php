<div class="card h-100 text-center">
    <img src="{{ $image ?? '' }}" class="card-img-top" alt="{{ $title }}">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">${{ $price }}</p>
        <a href="#" class="btn btn-dark mt-auto">View</a>
    </div>
</div>