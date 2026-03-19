<footer class="bg-light py-4 mt-5 border-top">
    <div class="container text-center">
        <!-- Navigation Links -->
        <div class="mb-2">
           <a href="{{ route('return-exchange') }}" class="text-dark me-3 text-decoration-none">
                Return & Exchange Policy
            </a>
            <a href="/contact" class="text-dark text-decoration-none">Contact Us</a>
        </div>

        <!-- Copyright -->
        <div>
            &copy; {{ date('Y') }} MyBrand. All rights reserved.
        </div>
    </div>
</footer>
<style>
    footer a:hover {
    text-decoration: underline;
    color: #000; /* darken on hover */
}
</style>