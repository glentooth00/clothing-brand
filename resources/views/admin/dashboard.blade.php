@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

    <!-- Example Cards -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-lg font-semibold mb-2">Total Products</h3>
        <p class="text-gray-500 text-xl">120</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-lg font-semibold mb-2">Total Orders</h3>
        <p class="text-gray-500 text-xl">45</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-lg font-semibold mb-2">Total Users</h3>
        <p class="text-gray-500 text-xl">32</p>
    </div>

</div>

<div class="mt-6 bg-white p-6 rounded-xl shadow">
    <h3 class="text-lg font-semibold mb-4">Dashboard Content</h3>
    <p class="text-gray-500">You can put tables, charts, or other CMS features here.</p>
</div>
@endsection