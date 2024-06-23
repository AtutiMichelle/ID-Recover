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
        @include('profile.partials.sidebar') <!-- Include sidebar directly -->
        
        <div class="main">
            @include('profile.partials.navbar') <!-- Include navbar directly -->
              

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