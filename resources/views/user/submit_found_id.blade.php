<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Recover</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" onclick="toggleSidebar()">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="/#home">ID Recover</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                   
                        <!-- Profile Link -->
                        <form method="GET" action="{{ route('profile.edit') }}" style="display: inline;">
                            @csrf
                            <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="lni lni-user"></i>
                                <span>Profile Settings</span>
                                
                            </a>
                        </form>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" >
                        <i class="fas fa-clipboard-list"></i>
                        <span>View Lost IDs</span>
                    </a>
                   
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('submit_found_id') }}" class="sidebar-link" onclick="showFoundIdForm();">
                        <i class="lni lni-layout"></i>
                        <span>Post Found IDs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>FAQs</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </form>
            </div>
            
        </aside>

        <!-- Main content -->
        <div class="main">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/#home">ID Recover</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-grow-1 justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" aria-current="page" href="/#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="/#about-section">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="/#services-section">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-md px-3 py-2 ring-3 ring-transparent transition hover:text-black hover:shadow-md focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-black dark:focus-visible:ring-white" href="/#services">Contact</a>
                            </li>
                        </ul>
                        <div class="sm:flex sm:items-center sm:ms-15 user-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            <div>{{ Auth::user()->name }}</div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main content area -->
            <div class="container mt-4">
                <div class="text-center">
<div class="login-section">
    <div class="form-box login">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('submit_found_id') }}" enctype="multipart/form-data">
            @csrf
            <h2>Submit Found ID</h2>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <x-text-input id="name_on_id" class="block mt-1 w-full" type="text" name="name_on_id" required autofocus />
                <label>Name on ID</label>
                <x-input-error :messages="$errors->get('name_on_id')" class="mt-2" />
            </div>
            <div class="input-box">
                <span class="icon"><i class='fas fa-user-graduate'></i></span>
                <x-text-input id="course_on_id" class="block mt-1 w-full" type="text" name="course_on_id" required />
                <label>Course on ID</label>
                <x-input-error :messages="$errors->get('course_on_id')" class="mt-2" />
            </div>
            
            <div class="input-box">
                <span class="icon"><i class='fas fa-map-marker-alt'></i></span>
                <x-text-input id="location_found" class="block mt-1 w-full" type="text" name="location_found" required />
                <label>Location Found</label>
                <x-input-error :messages="$errors->get('location_found')" class="mt-2" />
            </div>
            <div class="input-box">
                <span class="icon"><i class='fas fa-calendar-alt'></i></span>
                <x-text-input id="date_found" class="block mt-1 w-full" type="date" name="date_found" required />
                <label>Date Found</label>
                <x-input-error :messages="$errors->get('date_found')" class="mt-2" />
            </div>
            <div class="input-box">
                <span class="icon"><i class='fas fa-envelope'></i></span>
                <x-text-input id="finder_email" class="block mt-1 w-full" type="text" name="finder_email" required />
                <label for="finder_email">Finder's Email</label>
                <x-input-error :messages="$errors->get('finder_email')" class="mt-2" />
            </div>
            <div class="input-box file-input">
                <span class="icon"><i class='fas fa-image'></i></span>
                <input id="image_url" type="file" name="image_url" accept="image/*" required />
                <label for="image_url">Upload Image</label>
                <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
            </div>
            <!-- Add input fields for other data such as finder's name, finder's contact, etc. -->

            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>

</body>
</html>