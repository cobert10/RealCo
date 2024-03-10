<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RealCo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"  />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7efe3b4f7e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        {{-- Nav section --}}
        <nav class="m-4">
            <div class="nav max-w-[1200px] mx-auto flex items-center justify-between py-5">
                <a class="flex items-center" href="/">
                    <img class="w-12 h-10" src="{{ asset('images/logo.jpg') }}" alt="">
                    <span class="text-2xl font-bold text-sky-900">RealCo</span>
                </a>

                <div class="flex">
                    <a class="group hover:text-sky-500 transition duration-300 px-2" href="/">Find My Agent
                        <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-500"></span>
                    </a>
                    <a class="group hover:text-sky-500 transition duration-300 px-2" href="/">Floor Plans
                        <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-500"></span>
                    </a>
                    <a class="group hover:text-sky-500 transition duration-300 px-2" href="/">Guides
                        <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-500"></span>
                    </a>
                    <a class="group hover:text-sky-500 transition duration-300 px-2" href="/">Agent Portal
                        <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-500"></span>
                    </a>
                    <a href="/" class="relative inline-flex  text-sky-500">
                        <span class="material-symbols-outlined">account_circle</span>
                        Login
                    </a>
                </div>
            </div>
        </nav>
        <header>
            @yield('header')
        </header>
        {{-- End of Nav section --}}
        <main class="min-h-screen m-4">
            @yield('content')
        </main>
        {{-- Footer --}}
        <footer class="bg-sky-950 text-white mt-20">
            <div class="py-8 px-4 md:px-2">
                <div class="max-w-screen-xl w-full mx-auto">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-y-4 md:gap-x-0 md:justify-between ">
                            <div class="flex gap-x-4">
                                <a href="/">About Us</a>
                                <span>|</span>
                                <a href="/">Careers</a>
                                <span>|</span>
                                <a href="/">Contact Us</a>
                                <span>|</span>
                                <a href="/">Terms & Privacy Policy</a>
                            </div>
                            <div class="flex gap-x-4">
                                <div class="flex justify-center items-center w-10 h-10 border-2 rounded-full rounded-sky-100 ">
                                    <a href="/"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                                <div class="flex justify-center items-center w-10 h-10 border-2 rounded-full rounded-sky-100">
                                    <a href="/"><i class="fa-brands fa-x-twitter"></i></a>
                                </div>
                                <div class="flex justify-center items-center w-10 h-10 border-2 rounded-full rounded-sky-100">
                                    <a href="/"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="flex justify-center items-center w-10 h-10 border-2 rounded-full rounded-sky-100">
                                    <a href="/"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="flex justify-center items-center w-10 h-10 border-2 rounded-full rounded-sky-100">
                                    <a href="/"><i class="fa-brands fa-square-youtube"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div >
                            <span>Country: Philippines</span>
                        </div>
                        <div>
                            <span><i class="fa-regular fa-copyright"></i> 2024 RealCo.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- End of Footer --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>