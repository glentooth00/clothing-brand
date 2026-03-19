<div class="swiper heroSwiper">
    <div class="swiper-wrapper">
        @foreach(App\Models\HeroBanner::all() as $hero)
            <div class="swiper-slide position-relative text-white" 
                 style="background-image: url('{{ $hero->image }}'); background-size: cover; background-position: center; height: 80vh;">
                
                <div class="overlay position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.4); top:0; left:0;"></div>

                <div class="container position-relative d-flex flex-column justify-content-center align-items-center h-100 text-center">
                    <h1 class="display-4 fw-bold">{{ $hero->title }}</h1>
                    <p class="lead mb-4">{{ $hero->subtitle }}</p>
                    @if($hero->button_text && $hero->button_link)
                        <a href="{{ $hero->button_link }}" class="btn btn-dark btn-lg">{{ $hero->button_text }}</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination & Navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    var heroSwiper = new Swiper(".heroSwiper", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: true
        },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        effect: 'fade',
        fadeEffect: { crossFade: true },
    });
});
</script>

<style>
.heroSwiper .overlay {
    position: absolute;
    top:0; left:0; width:100%; height:100%;
    background-color: rgba(0,0,0,0.4);
}

/* Slide text */
.heroSwiper .swiper-slide h1 {
    font-size: 2.5rem;
}

.heroSwiper .swiper-slide p {
    font-size: 1.2rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .heroSwiper .swiper-slide {
        height: 50vh !important; /* shorter height on mobile */
    }

    .heroSwiper .swiper-slide h1 { font-size: 1.8rem; }
    .heroSwiper .swiper-slide p { font-size: 1rem; }
    .heroSwiper .btn { font-size: 0.9rem; padding: 0.5rem 1rem; }
    .heroSwiper .swiper-button-next,
    .heroSwiper .swiper-button-prev { width:30px; height:30px; }
}

/* Optional: smaller height for very small screens */
@media (max-width: 480px) {
    .heroSwiper .swiper-slide {
        height: 40vh !important;
    }
}
</style>