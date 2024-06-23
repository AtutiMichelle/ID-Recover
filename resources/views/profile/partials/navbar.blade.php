<!-- resources/views/profile/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
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
