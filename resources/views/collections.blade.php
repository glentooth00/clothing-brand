@extends('layouts.app')

@section('content')
    <!-- Hero Banner at the top -->
    <x-hero-banner />

    <x-product-gallery :products="$products" />

    <x-product-grid :products="$menProducts" title="Men's Collection" viewMoreUrl="#" />
    {{-- {{ route('collections', ['category' => 'men']) }} --}}

    <x-product-grid :products="$womenProducts" title="Women's Collection" viewMoreUrl="#" />
    {{-- {{ route('collections', ['category' => 'women']) }} --}}
@endsection