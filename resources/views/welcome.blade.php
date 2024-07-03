{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])   --}}
    {{-- data-theme="lofi" --}}
    {{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         --}}
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Styles -->
        {{-- <style>
            
        </style>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
          
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
                </form> --}}
            {{-- </div>
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
        </nav> --}}

        {{-- landing-page background --}}
        {{-- <div class="container3">
            <div class="wave1">
                <img src="{{ asset('download.jpeg') }}" alt="School ID Image">
            </div>
            <div class="main-content1">
                <div class="image-pista1">
                    
                </div>
                <div class="main-text1">
                    <h1>ID Recover</h1>
                    <p>Efficiently replace your lost or stolen school ID with ease. Our system ensures quick recovery and replacement for all students.</p>
                   
                </div>
            </div>
            <div class="right1">
                <div class="box1">
                    <div class="image1">
                        <img src="find.svg" alt="Step 1 Image">
                    </div>
                    <div class="inner-box1">
                        <h3>Find Lost IDs</h3>
                        <p>Quickly find your lost school ID online.</p>
                    </div>
                </div>
                <div class="box1">
                    <div class="image1">
                        <img src="usercheck.svg" alt="Step 2 Image">
                    </div>
                    <div class="inner-box1">
                        <h3>User-Friendly</h3>
                <p>Our system is easy to use</p>
                    </div>
                </div>
                <div class="box1">
                    <div class="image1">
                        <img src="idcard.svg" alt="Step 3 Image">
                    </div>
                    <div class="inner-box1">
                        <h3>Get New ID</h3>
                        <p>Receive a new school ID quickly and securely.</p>
                    </div>
                </div>
            </div>
        </div>
         --}}
           
         <!-- About Section -->
         {{-- <div id="about-section" class="about-section">
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
     --}}
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
{{-- <div id="services-section" class="services-section">
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
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
                    
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer> 
                 </div>
            </div>
        </div>
    </body>
</html> --}} 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ID Recover</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 {{-- <img src="{{ asset('back1.jpg') }} --}}
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])  
  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset ('img/logo.png') }}" alt="">
        <h1 class="sitename">ID Recover</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#services">Services</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('register') }}">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="hero-bg">
    <img src="{{ asset('img/hero-bg-light.webp' ) }}" alt="">
  </div>
  <div class="container text-center">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h1 data-aos="fade-up">Welcome to <span>ID Recover</span></h1>
      <p data-aos="fade-up" data-aos-delay="100">Discover a streamlined approach to managing and securing your IDs effortlessly<br></p>
      <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('register') }}" class="btn-get-started">Get Started</a>
      </div>
      <img src="{{ asset('img/hero-services-img.webp') }}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
    </div>
  </div>
</section><!-- /Hero Section -->

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Lost ID Reporting</a></h4>
            <p class="description">Easily report a lost ID card and get assistance with immediate temporary access solutions.</p>
          </div>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Found ID Submission</a></h4>
            <p class="description">Submit found ID cards to our system so we can return them to their rightful owners.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">ID Replacement Services</a></h4>
            <p class="description">Request a replacement for lost or damaged ID cards quickly and efficiently.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>
</section><!-- /Featured Services Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p class="who-we-are">Who We Are</p>
        <h3>Ensuring Security and Convenience for All Students</h3>
        <p class="fst-italic">
          We provide a comprehensive solution for managing lost and found ID cards, ensuring students can quickly regain access and maintain security on campus.
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Immediate assistance for reporting and handling lost ID cards.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Efficient system for submitting found IDs and reuniting them with their owners.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Fast and hassle-free ID card replacement service to minimize disruptions.</span></li>
        </ul>
      
      </div>

      <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="{{ asset('img/about-company-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="{{ asset('img/about-company-2.jpg ') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="{{ asset('undergrad1.jpg') }}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

    <!-- Features Section -->
    <!-- Features Section -->
<section id="features" class="features section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Features</h2>
    <p>Explore the key features of our comprehensive ID management system.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-between">

      <div class="col-lg-5 d-flex align-items-center">

        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-binoculars"></i>
              <div>
                <h4 class="d-none d-lg-block">Real-Time Lost ID Reporting</h4>
                <p>Quickly report lost IDs and receive instant notifications and updates on the status of your report.</p>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-box-seam"></i>
              <div>
                <h4 class="d-none d-lg-block">Efficient Found ID Submission</h4>
                <p>Submit found IDs through our platform, making it easy to return them to their rightful owners swiftly.</p>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-brightness-high"></i>
              <div>
                <h4 class="d-none d-lg-block">Hassle-Free ID Replacement</h4>
                <p>Request replacements for lost or damaged IDs with minimal paperwork and fast processing times.</p>
              </div>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

      </div>

      <div class="col-lg-6">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <img src="{{ asset('img/tabs-1.jpg') }}" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <img src="{{ asset('img/tabs-2.jpg') }}" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <img src="{{ asset('img/tabs-3.jpg') }}" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->
        </div>

      </div>

    </div>

  </div>

</section><!-- /Features Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Our range of services ensures that you have the support you need for ID management.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-5">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <i class="bi bi-activity icon"></i>
          <div>
            <h3>Lost ID Assistance</h3>
            <p>Get help with reporting and tracking lost ID cards to ensure they are quickly found or replaced.</p>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <i class="bi bi-broadcast icon"></i>
          <div>
            <h3>Found ID Reporting</h3>
            <p>Submit found IDs easily, helping us return them to their owners and maintain campus security.</p>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <i class="bi bi-easel icon"></i>
          <div>
            <h3>ID Card Replacement</h3>
            <p>Request a new ID card quickly if yours is lost or damaged, ensuring continuous access to campus facilities.</p>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <i class="bi bi-bounding-box-circles icon"></i>
          <div>
            <h3>Temporary Access Solutions</h3>
            <p>Get temporary access cards while waiting for your new ID to be issued, minimizing disruption to your daily routine.</p>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
          <i class="bi bi-calendar4-week icon"></i>
          <div>
            <h3>24/7 Support</h3>
            <p>Our team is available around the clock to assist with any issues related to your ID card.</p>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
          <i class="bi bi-chat-square-text icon"></i>
          <div>
            <h3>Security and Privacy</h3>
            <p>Ensuring your information is secure and your privacy is protected throughout the ID management process.</p>
           
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>See what our users have to say about their experience with our ID management system.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The ID replacement process was incredibly smooth. I lost my ID, reported it online, and got a replacement quickly. Very impressed with the efficiency!"
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Student</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The system makes it easy to manage and replace IDs. I've used it multiple times, and each time, the process was straightforward."
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Administrator</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Getting a replacement ID through the system was hassle-free. It's convenient and ensures our IDs are managed securely."
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Student</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The ID management system ensures IDs are tracked and returned efficiently. It's a reliable solution for our school."
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Teacher</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "I appreciate the ease of reporting and replacing lost IDs through the system. It's user-friendly and supports our students efficiently."
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Student</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
    
          </div>
          <div class="swiper-pagination"></div>
        </div>
    
      </div>
    
    </section><!-- /Testimonials Section -->
    <!-- Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">QuickStart</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickStart</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js ') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js ') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js ') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js ') }}"></script>

  <!-- Main JS File -->
 

</body>

</html>
