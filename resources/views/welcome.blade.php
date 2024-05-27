<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lofi">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Styles -->
        <style>
            
           
        </style>


    </head>
    <body class="font-sans antialiased ">
        <x-mary-nav sticky full-width collapsible class="bg-blue-700">

            {{-- Brand --}}
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-mary-icon name="o-bars-3" class="cursor-pointer" />
                </label>
        
                {{-- Brand --}}
                <div>Lost</div>
            </x-slot:brand>
        
            {{-- Right side actions --}}
            <x-slot:actions>
               
                    <nav class="-mx-3 flex flex-1 justify-center">
                        <a href="{{ url('/') }}" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                            Home
                        </a>
                        <a href="#about-section" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                            About
                        </a>
                        <a href="#services-section" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                            Services
                        </a>
                        
                
                        <a href="{{ url('/contact') }}" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                            Contact Us
                        </a>
                        
                        
                    </nav>
                </div>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md px-9 py-4 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </x-slot:actions>
        </x-mary-nav>
                    </header>

                    <!-- Background image section -->
                    <div class="relative h-screen bg-center" style="background: url('{{ asset('background3.jpg') }}') no-repeat; background-size: cover;">
                        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-blue-600 opacity-95"></div>
                        <div class="relative z-10 flex items-center justify-left h-full">
                            <div class="text-white p-10">
                                <h1 class="text-6xl font-bold mb-4">Lost and Found ID</h1>
                                <p class="text-2xl">Helping you recover your lost IDs quickly and easily.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Section -->
                    <div id="about-section" class="about-section">
                        <h1>About Us</h1>
    <div class="intro-section">
        <img src="{{ asset('back1.jpg') }}" alt="Background">
        <div class="intro-text">
            <h2>Let's Change Our School Together</h2>
            <p>We recover and return your School IDs. We store your lost IDs and enable you to search our records for them. We vet and verify the genuineness of claimants. And you know what, we have reunited countless school IDs with their owners, ensuring they can access school facilities and sit for their exams.</p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            
            <div class="card-content">
                <h5>Importance of School ID</h5>
                <p>The School ID is very essential in gaining access to the school and also many school facilities and also is needed to enable a student to be able to sit for their exam. Manual School ID replacement is a very taxing and long process which can be eased by using this web application.</p>
            </div>
        </div>
        <div class="card">
            
            <div class="card-content">
                <h5>About the Web Application</h5>
                <p>This web application will provide an interface where Strathmore faculty can upload a photo of a school ID that they find lying around the school and  automate the replacement process.</p>
            </div>
        </div>
        <div class="card">
            
            <div class="card-content">
                <h5>Uploading Found IDs</h5>
                <p>Strathmore faculty (students and staff) who find the lost IDs can upload a picture of the ID, the ID admission number, and their school email where they can be reached.</p>
            </div>
        </div>
        <div class="card">
            
            <div class="card-content">
                <h5>Searching Lost IDs</h5>
                <p>Students who have lost their IDs can log into the web app, and search up their admission number to find their IDs. The system will also automate the Strathmore replacement process in case the ID is not found, that is, uploading the abstract, payment process, and notification that the new ID is ready. </p>
            </div>
        </div>
    </div>
     <!-- About Section -->

      <!-- Services Section -->
    <div id="services-section" class="services-section">
        <h1>Our Services</h1>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <h5>ID Recovery Service</h5>
                    <p>We recover lost School IDs found on the campus and store them securely until they are claimed.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>ID Verification Service</h5>
                    <p>We verify the identity of claimants to ensure that the IDs are returned to their rightful owners.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Online ID Search</h5>
                    <p>Students can log into the web app and search for their lost IDs using their admission number.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Automated Replacement Process</h5>
                    <p>If an ID is not found, the system automates the replacement process, including uploading abstracts, handling payments, and notifying students when their new ID is ready.</p>
     <!-- Services Section -->
</section>
                    
                    {{-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer> --}}
                </div>
            </div>
        </div>
    </body>
</html>
