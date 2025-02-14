<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Spatie</title>
</head>

<body>
    <nav class="bg-primary py-4 shadow-md">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="text-white text-xl font-bold">
                    <a href="{{ route('home') }}" class="hover-underline">Spatie</a>
                </div>
                <div class="lg:hidden">
                    <button id="hamburger" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <ul class="hidden lg:flex space-x-8 text-white text-lg ml-auto">
                    <li><a href="{{ route('home') }}" class="hover-underline transition duration-200">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover-underline transition duration-200">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover-underline transition duration-200">Contact</a>
                    </li>
                </ul>

                <div id="mobile-menu" class="lg:hidden mt-4 hidden">
                    <ul class="flex flex-col space-y-4 text-lg text-white">
                        <li><a href="{{ route('home') }}" class="hover-underline transition duration-200">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover-underline transition duration-200">About</a>
                        </li>
                        <li><a href="{{ route('contact') }}" class="hover-underline transition duration-200">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>

    <script>
        // JavaScript to toggle the mobile menu
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobile-menu");

        hamburger.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
