<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Explore music</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased bg-gray-900">
<nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <!-- Logo or site title -->
                <a href="#" class="text-white text-lg font-bold">My Website</a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Navigation links -->
                    <a href="/" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/about" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="/faq" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">FAQ</a>
                    <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Welcome, Username -->
                    <div class="text-gray-300 text-sm font-medium mr-2">Welcome, Username</div>
                    <!-- Sign-in/Sign-up/Logout button -->
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sign In</a>
                    <!-- Add appropriate logic to show Sign Up or Logout button based on user authentication status -->
                    <!-- <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sign Up</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')
<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <div class="text-sm">
            &copy; {{ date('Y') }} DSXM.org. All rights reserved.
        </div>
        <div class="text-sm">
            <a href="https://github.com/desuex/dsxm.org" class="text-gray-300 hover:text-white" target="_blank" rel="noopener noreferrer">View on GitHub</a>
        </div>
    </div>
</footer>

</body>
</html>
