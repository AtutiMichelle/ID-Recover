<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Posted IDs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Additional styling as per your design requirements */

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
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('submit_found_id') }}" class="sidebar-link" onclick="showFoundIdForm();">
                        <i class="lni lni-layout"></i>
                        <span>Post Found IDs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('retrieve_posted_id') }}" class="sidebar-link" >
                        <i class="fas fa-clipboard-list"></i>
                        <span>View Lost IDs</span>
                    </a>
                   
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>ID Replacement</span>
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
              

            <div class="container">
                <h1>ID Card Replacement</h1>
                <form action="{{ route('submit_id_replacement') }}" method="POST">
                    @csrf
                    <!-- Personal Details -->
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="admission_number">Admission/Student Number:</label>
                        <input type="text" id="admission_number" name="admission_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Course:</label>
                        <input type="text" id="course" name="course" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mode_of_study">Mode of Study:</label>
                        <select id="mode_of_study" name="mode_of_study" class="form-control" required>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                        </select>
                    </div>
                    <!-- Payment Information -->
                    <div class="form-group">
                        <label for="id_type">Type of ID Replacement:</label>
                        <select id="id_type" name="id_type" class="form-control" required>
                            <option value="Expired/Broken/Faded">Expired/Broken/Faded (Kshs.500/-)</option>
                            <option value="Lost (First Time)">Lost (First Time) (Kshs.1,100/-)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="transaction_message">Transaction Message (SU Pay Bill):</label>
                        <textarea id="transaction_message" name="transaction_message" class="form-control" rows="4" required></textarea>
                    </div>
                    <!-- Documents -->
                    <div class="form-group">
                        <label for="police_abstract">Police Abstract (for Lost ID Cards):</label>
                        <input type="file" id="police_abstract" name="police_abstract" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="lost_id_form">Signed Lost ID Form:</label>
                        <input type="file" id="lost_id_form" name="lost_id_form" class="form-control-file">
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>



            </body>
            
            </html>