<aside class="w-64 bg-white shadow-lg flex flex-col">
    <div class="h-20 flex items-center justify-center border-b">
        <h1 class="text-2xl font-bold text-indigo-600">Clothing CMS</h1>
    </div>

    <nav class="flex-1 overflow-y-auto p-4" x-data="{ open1: false, open2: false, open3: false }">

        <ul class="flex flex-col gap-2 mb-6">
            <!-- Simple Clickable Menu Items -->
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}"
                   class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <i class="bi bi-box-seam"></i>
                    Products
                </a>
            </li>
            <li>
                <a href="#!"
                   class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <i class="bi bi-cart-check"></i>
                    Sales
                </a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}"
                   class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <i class="bi bi-currency-dollar"></i>
                    Transactions
                </a>
            </li>
            <li>
                <a href="#!"
                   class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <i class="bi bi-star"></i>
                    Featured
                </a>
            </li>

            <!-- Collapsible Menu 1 -->
            <li>
                <button @click="open1 = !open1"
                        class="flex items-center justify-between w-full gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <span class="flex items-center gap-3">
                        <i class="bi bi-folder"></i>
                        Projects
                    </span>
                    <i :class="open1 ? 'bi bi-chevron-up' : 'bi bi-chevron-down'"></i>
                </button>
                <ul x-show="open1" x-transition class="flex flex-col gap-2 pl-10 mt-2">
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Project A</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Project B</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Project C</a></li>
                </ul>
            </li>

            <!-- Collapsible Menu 2 -->
            <li>
                <button @click="open2 = !open2"
                        class="flex items-center justify-between w-full gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <span class="flex items-center gap-3">
                        <i class="bi bi-bar-chart"></i>
                        Reports
                    </span>
                    <i :class="open2 ? 'bi bi-chevron-up' : 'bi bi-chevron-down'"></i>
                </button>
                <ul x-show="open2" x-transition class="flex flex-col gap-2 pl-10 mt-2">
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Daily</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Weekly</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Monthly</a></li>
                </ul>
            </li>

            <!-- Collapsible Menu 3 -->
            <li>
                <button @click="open3 = !open3"
                        class="flex items-center justify-between w-full gap-3 px-4 py-2 rounded-lg hover:bg-indigo-100 transition text-gray-700">
                    <span class="flex items-center gap-3">
                        <i class="bi bi-gear"></i>
                        Settings
                    </span>
                    <i :class="open3 ? 'bi bi-chevron-up' : 'bi bi-chevron-down'"></i>
                </button>
                <ul x-show="open3" x-transition class="flex flex-col gap-2 pl-10 mt-2">
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Profile</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Preferences</a></li>
                    <li><a href="#!" class="px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-600">Security</a></li>
                </ul>
            </li>

        </ul>
    </nav>

    <div class="p-4 border-t">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                    class="flex items-center gap-2 text-gray-500 hover:text-red-600 transition"
                    title="Logout">
                <i class="bi bi-box-arrow-right text-lg"></i>
                <span class="text-sm">Logout</span>
            </button>
        </form>
    </div>
</aside>

<script src="//unpkg.com/alpinejs" defer></script>