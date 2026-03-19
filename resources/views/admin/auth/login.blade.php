<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen flex items-center justify-center bg-gray-100">

    <!-- Dimmed overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Login card -->
    <div class="relative bg-white rounded-3xl w-full max-w-md p-10 z-10"
         style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            Admin Login
        </h2>

        @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-700 p-3 rounded mb-4 text-sm text-center">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div class="relative">
                <input type="email" name="email" id="email" required
                       placeholder="Email"
                       class="peer w-full border-b border-gray-300 py-3 placeholder-transparent focus:border-indigo-500 focus:outline-none focus:ring-0 transition bg-transparent">
                <label for="email"
                       class="absolute left-0 -top-1 text-gray-400 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-1 peer-focus:text-gray-600 peer-focus:text-sm">
                    Email
                </label>
            </div>

            <!-- Password -->
            <div class="relative">
                <input type="password" name="password" id="password" required
                       placeholder="Password"
                       class="peer w-full border-b border-gray-300 py-3 placeholder-transparent focus:border-indigo-500 focus:outline-none focus:ring-0 transition bg-transparent">
                <label for="password"
                       class="absolute left-0 -top-1 text-gray-400 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:-top-1 peer-focus:text-gray-600 peer-focus:text-sm">
                    Password
                </label>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl font-semibold text-lg transition">
                Sign In
            </button>
        </form>

        <p class="text-center text-gray-400 text-sm mt-6">
            &copy; 2026 Clothing Brand CMS
        </p>

    </div>

</body>
</html>