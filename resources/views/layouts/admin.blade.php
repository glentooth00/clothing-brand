<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100 flex h-screen">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="h-16 bg-white flex items-center justify-between px-6 shadow">
            <h2 class="text-xl font-bold text-gray-800">@yield('page-title', 'Dashboard')</h2>
            <div class="flex items-center gap-4">
                <span class="text-gray-600">Admin</span>
                <i class="bi bi-bell fs-5 text-gray-600"></i>
                <i class="bi bi-person-circle fs-5 text-gray-600"></i>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-auto p-6 bg-gray-100">
            @yield('content')
        </main>
    </div>

</body>
</html>