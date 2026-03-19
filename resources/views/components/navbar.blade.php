<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
    <div class="container d-flex align-items-center">

        <!-- LEFT SIDE: Brand + Nav Links -->
        <div class="d-flex align-items-center gap-4">
            <!-- Brand -->
            <a class="navbar-brand fw-bold m-0" href="/">MyBrand</a>

            <!-- Desktop Nav Links -->
            <ul class="navbar-nav flex-row gap-3 d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="/collections">Collections</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
            </ul>
        </div>

        <!-- RIGHT SIDE: Icons + Mobile Toggle -->
        <div class="d-flex align-items-center gap-3 ms-auto">

            <!-- Desktop Icons -->
            <div class="d-none d-lg-flex align-items-center gap-3">
                <a href="#" class="text-dark"><i class="bi bi-search"></i></a>
                <a href="/login" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                <a href="/cart" class="text-dark position-relative">
                    <i class="bi bi-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">2</span>
                </a>
            </div>

            <!-- Mobile Icons -->
            <div class="d-flex align-items-center gap-3 d-lg-none">
                <a href="#" class="text-dark"><i class="bi bi-search fs-5"></i></a>
                <a href="/login" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                <a href="/cart" class="text-dark position-relative">
                    <i class="bi bi-cart fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">2</span>
                </a>
            </div>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </div>
</nav>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav">
    <div class="offcanvas-header">
        <h5 class="fw-bold">MyBrand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item mb-2"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item mb-2"><a class="nav-link" href="/shop">Shop</a></li>
            <li class="nav-item mb-2"><a class="nav-link" href="/collections">Collections</a></li>
            <li class="nav-item mb-2"><a class="nav-link" href="/contact">Contact Us</a></li>
        </ul>
    </div>
</div>

<style>
/* Navbar */
.navbar .nav-link {
    font-weight: 500;
}

.navbar i {
    font-size: 18px;
    transition: 0.2s ease;
}

.navbar i:hover {
    opacity: 0.7;
}

/* Mobile Offcanvas Slide */
.offcanvas-start {
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
}

.offcanvas-start.show {
    transform: translateX(0);
}

/* Backdrop */
.offcanvas-backdrop {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.offcanvas-backdrop.show {
    opacity: 0.5;
}
</style>

<!-- Bootstrap JS (ensure included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>