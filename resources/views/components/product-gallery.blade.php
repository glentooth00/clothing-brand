<style>
/* Navigation buttons */
.swiper-button-next,
.swiper-button-prev {
    color: rgba(128, 128, 128, 0.5);
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999 !important;
    pointer-events: auto;
}

/* Hover effect */
.swiper-button-next:hover,
.swiper-button-prev:hover {
    color: rgba(128, 128, 128, 0.9);
    background-color: rgba(255, 255, 255, 0.4);
}

/* Slides */
.swiper-slide {
    display: flex;
    justify-content: center;
    padding: 6px;
    box-sizing: border-box;
    width: auto; /* Let Swiper handle width */
}

/* Card fills slide */
.swiper-slide > * {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

/* Images */
.swiper-slide img {
    object-fit: cover;
    height: 200px; /* desktop */
    width: 100%;
}

/* Mobile adjustments */
@media (max-width: 768px) {
    /* Smaller images */
    .swiper-slide img {
        height: 140px;
    }

    /* Smaller arrows */
    .swiper-button-next,
    .swiper-button-prev {
        width: 30px;
        height: 30px;
    }

    /* Move arrows inside edges of slider */
    .swiper-button-next {
        right: 5px;
    }
    .swiper-button-prev {
        left: 5px;
    }
}
</style>

<div class="swiper mySwiper py-4">
    <div class="swiper-wrapper">
        @foreach($products as $product)
            <div class="swiper-slide">
                <x-product-card 
                    :title="$product->title"
                    :price="$product->price"
                    :image="$product->image" />
            </div>
        @endforeach
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 25,
        loop: true,
        autoplay: { 
            delay: 2500,
            disableOnInteraction: true
        },
        pagination: { 
            el: ".swiper-pagination",
            clickable: true 
        },
        navigation: { 
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev" 
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 10 },      
            576: { slidesPerView: 2, spaceBetween: 15 },    
            768: { slidesPerView: 3, spaceBetween: 20 },    
            992: { slidesPerView: 4, spaceBetween: 25 },    
            1200: { slidesPerView: 5, spaceBetween: 25 }    
        }
    });
});
</script>