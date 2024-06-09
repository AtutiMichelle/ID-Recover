<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])   --}}
    {{-- data-theme="lofi" --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Styles -->
        <style>
            
        </style>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ID Recover</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-grow-1 justify-content-center"> <!-- Center aligned -->
                        <li class="nav-item">
                            <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="#about-section">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="#services-section">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="#services">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto"> <!-- Right aligned -->
                        @if (Route::has('login'))
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                        <div class="text-black">Welcome {{ Auth::user()->name }}</div>

                                    </a>

                                    <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white">
                                        Log In/Register
                                    </a>
                                </li>
                                
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('background3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('background3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('background3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

         <!-- About Section -->
         <div id="about-section" class="about-section">
            <h1>About Us</h1>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="intro-text">
                            <h2>Let's Change Our School Together</h2>
                            <p>We recover and return your School IDs. We store your lost IDs and enable you to search our records for them. We vet and verify the genuineness of claimants. And you know what, we have reunited countless school IDs with their owners, ensuring they can access school facilities and sit for their exams.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('back1.jpg') }}" alt="Background" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Importance of School ID</h5>
                                <hr>
                                <p class="card-text">The School ID is very essential in gaining access to the school and also many school facilities and also is needed to enable a student to be able to sit for their exam. Manual School ID replacement is a very taxing and long process which can be eased by using this web application.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">About the Web Application</h5>
                                <hr>
                                <p class="card-text">This web application will provide an interface where Strathmore faculty can upload a photo of a school ID that they find lying around the school and automate the replacement process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Uploading Found IDs</h5>
                                <hr>
                                <p class="card-text">Strathmore faculty (students and staff) who find the lost IDs can upload a picture of the ID, the ID admission number, and their school email where they can be reached.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Contact Us</h5>
                                <hr>
                                <p class="card-text">For any inquiries or assistance, feel free to reach out to us via our contact page or through our social media channels. We are here to help you recover your lost IDs and ensure a smooth process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
                  <!-- About Section -->  

                    <!-- Background image section -->
                    {{-- <div class="relative h-screen bg-center" style="background: url('{{ asset('background3.jpg') }}') no-repeat; background-size: cover;">
                        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-blue-600 opacity-95"></div>
                        <div class="relative z-10 flex items-center justify-left h-full">
                            <div class="text-white p-10">
                                <h1 class="text-6xl font-bold mb-4">Lost and Found ID</h1>
                                <p class="text-2xl">Helping you recover your lost IDs quickly and easily.</p>
                            </div>
                        </div>
                    </div> --}}

<!-- Services Section -->
<div id="services-section" class="services-section">
    <div class="container">
        <h1 class="text-center mb-5">Our Services</h1>
        <p class="lead text-center mb-5">We offer a range of services to help you recover and manage your school IDs effectively.</p>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ID Recovery Service</h5>
                        <hr>
                        <p class="card-text">We recover lost School IDs found on the campus and store them securely until they are claimed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ID Verification Service</h5>
                        <hr>
                        <p class="card-text">We verify the identity of claimants to ensure that the IDs are returned to their rightful owners.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Online ID Search</h5>
                        <hr>
                        <p class="card-text">Students can log into the web app and search for their lost IDs using their admission number.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Automated Replacement Process</h5>
                        <hr>
                        <p class="card-text">If an ID is not found, the system automates the replacement process, including uploading abstracts, handling payments, and notifying students when their new ID is ready.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    
                    {{-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer> --}}
                {{-- </div>
            </div>
        </div> --}}
    </body>
</html>
