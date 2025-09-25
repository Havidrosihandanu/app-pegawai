<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Brand -->
                <div class="flex items-center">
                    <span class="text-xl font-bold text-indigo-600">App pegawai</span>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('employees.index') }}"
                        class="text-gray-700 hover:text-indigo-600 font-medium">Employee</a>
                    <a href="" class="text-gray-700 hover:text-indigo-600 font-medium">Department</a>
                    <a href="" class="text-gray-700 hover:text-indigo-600 font-medium">Attendance</a>
                    <a href="" class="text-gray-700 hover:text-indigo-600 font-medium">Report</a>
                    <a href="" class="text-gray-700 hover:text-indigo-600 font-medium">Settings</a>
                </div>

                <!-- Hamburger (Mobile) -->
                <div class="flex items-center md:hidden">
                    <button id="menu-toggle" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <!-- Icon -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2">
            <a href="{{ route('employees.index') }}" class="block text-gray-700 hover:text-indigo-600">Employee</a>
            <a href="" class="block text-gray-700 hover:text-indigo-600">Department</a>
            <a href="" class="block text-gray-700 hover:text-indigo-600">Attendance</a>
            <a href="" class="block text-gray-700 hover:text-indigo-600">Report</a>
            <a href="" class="block text-gray-700 hover:text-indigo-600">Settings</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="p-6">
        @yield('content')
    </main>

    <!-- Script Toggle -->
    <script>
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
