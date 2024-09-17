<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Biolinkar :: Create Your Bio Here</title>
</head>
<body class="bg-gray-100">
    <nav class="text-gray-500">
        <div class="container mx-auto px-4 bg-white rounded-lg shadow h-16 mt-6 flex items-center justify-between">
            <a href="">
                <p class="text-2xl font-medium">BioLinkar</p>
            </a>

            <ul class="flex items-center gap-2">
                <li><a href="" class="py-1 px-2 transition-all hover:text-gray-900">Home</a></li>
                <li><a href="" class="py-1 px-2 transition-all hover:text-gray-900">Directory</a></li>
                <li><a href="" class="py-1 px-2 transition-all hover:text-gray-900">Dashboard</a></li>
                <li class="relative">
                    <button id="avatar-btn" class="h-10 w-10 rounded-full">
                        <img src="https://st3.depositphotos.com/9998432/13335/v/450/depositphotos_133352156-stock-illustration-default-placeholder-profile-icon.jpg" alt="" class="w-full rounded-full">
                    </button>
                    <div id="avatar-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Account</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Page</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('main')

    @vite('resources/js/app.js')
</body>
</html>