<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Recover</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/dash2.css', 'resources/js/dash2.js'])
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    
</head>
<body>
  
<!-- SIDEBAR -->
@include('profile.partials.admin_sidebar') <!-- Include sidebar directly -->


<!-- SIDEBAR -->

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    @include('profile.partials.navbar')

    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>  
        <div class="login-section">
            <div class="form-box login">

                @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
               
                <h2>ID Replacement </h2>

                <!-- Selection Interface -->
                <div class="btn-group mb-4" role="group" aria-label="ID Replacement Options">
                    <button type="button" class="btn-getstarted me-5 btn-lg" id="btn-expired">Expired/Broken ID</button>
                    <button type="button" class="btn-getstarted btn-lg" id="btn-lost">Lost ID</button>
                </div>
            
                <!-- Expired/Broken ID Form -->
                <form id="form-expired" action="{{ route('id_replacement.submit_expired') }}" method="POST" enctype="multipart/form-data" class="mb-4" style="display: none;">
                    @csrf
                    <h2>Expired/Broken ID Card Replacement</h2>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-id-card"></i></span>
                        <input type="text" class="form-control" id="admission_expired" name="admission" required>
                        <label for="admission_expired">Admission Number</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-user"></i></span>
                        <input type="text" class="form-control" id="name_expired" name="name" required>
                        <label for="name_expired">Full Name</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-envelope"></i></span>
                        {{-- <input type="email" class="form-control" id="email_expired" name="email" required> --}}
                        <x-text-input id="email" type="email" name="email" id="email_expired" :value="old('email')" required placeholder="Email" pattern=".+@strathmore\.edu" title="Email must end with @strathmore.edu" />
                        <label for="email_expired">Email</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-book-content"></i></span>
                        <input type="text" class="form-control" id="faculty_expired" name="faculty" required>
                        <label for="faculty_expired">Faculty</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-book-content"></i></span>
                        <input type="text" class="form-control" id="course_expired" name="course" required>
                        <label for="course_expired">Course</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-photo-album"></i></span>
                        <input type="file" class="form-control" id="photo_expired" name="photo" required>
                        <label >Passport Size Photo</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-photo-album"></i></span>
                        <input type="file" class="form-control" id="id_photo_expired" name="id_photo_expired" required>
                        <label for="id_photo_expired">Photo of Expired/Broken ID</label>
                    </div>
                    <br>
                  {{--  <input type="hidden" name="form_data" value="{{ json_encode($expiredFormData) }}">--}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- Lost ID Form -->
                <form id="form-lost" action="{{ route('id_replacement.submit_lost') }}" method="POST" enctype="multipart/form-data" class="mb-4" style="display: none;">
                    @csrf
                    <h2>Lost ID Card Replacement</h2>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-id-card"></i></span>
                        <input type="text" class="form-control" id="admission_lost" name="admission" required>
                        <label for="admission_lost">Admission Number</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-user"></i></span>
                        <input type="text" class="form-control" id="name_lost" name="name" required>
                        <label for="name_lost">Name</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-envelope"></i></span>
                        {{-- <input type="email" class="form-control" id="email_lost" name="email" required> --}}
                        <x-text-input id="email" type="email" name="email" id="email_lost" :value="old('email')" required placeholder="Email" pattern=".+@strathmore\.edu" title="Email must end with @strathmore.edu" />
                        <label for="email_lost">Email</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-book-content"></i></span>
                        <input type="text" class="form-control" id="faculty_lost" name="faculty" required>
                        <label for="faculty_lost">Faculty</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-book-content"></i></span>
                        <input type="text" class="form-control" id="course_lost" name="course" required>
                        <label for="course_lost">Course</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-photo-album"></i></span>
                        <input type="file" class="form-control" id="photo_lost" name="photo" required>
                        <label for="photo_lost">Passport Size Photo</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <span class="icon"><i class="bx bx-file"></i></span>
                        <input type="file" class="form-control" id="police_abstract" name="police_abstract" required>
                        <label for="police_abstract">Police Abstract</label>
                    </div>
                       <br>
                     {{--  <input type="hidden" name="form_data" value="{{ json_encode($lostFormData) }}"> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- Display Guidelines and Instructions -->
                <div id="guidelines" style="display: block;">
                    <h2>Guidelines and Instructions</h2>
                    <ul class="styled-list1">
                
                            <li>Fill out the ID replacement form with accurate information including your admission number, name, email, faculty, and course.</li>
                            <li>For lost IDs, ensure you upload a police abstract and a signed copy of the lost ID form.</li>
                            <li>For expired IDs, ensure you upload a clear photo and the expired ID photo.</li>
                            <li>After submitting the form, you will receive a confirmation message on the screen.</li>
                            <li>You can check the status of your ID replacement requests on the dashboard under "ID Replacements".</li>
                            <li>Once your ID replacement is processed, you will be notified via email on how to collect your new ID card.</li>
                        </ul>
                   
                </div>
            </div>
        </div>
    </main>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('btn-expired').addEventListener('click', function() {
        document.getElementById('form-expired').style.display = 'block';
        document.getElementById('form-lost').style.display = 'none';
        document.getElementById('guidelines').style.display = 'none'; // Hide guidelines
        document.getElementById('btn-expired').style.display = 'none';
        document.getElementById('btn-lost').style.display = 'none';

    });

    document.getElementById('btn-lost').addEventListener('click', function() {
        document.getElementById('form-expired').style.display = 'none';
        document.getElementById('form-lost').style.display = 'block';
        document.getElementById('guidelines').style.display = 'none'; // Hide guidelines
        document.getElementById('btn-expired').style.display = 'none';
        document.getElementById('btn-lost').style.display = 'none';
    });

    document.getElementById('submit-expired').addEventListener('click', function(event) {
        event.preventDefault();
        array.forEach(element => {
            initiateStkPush('form-expired');
        });
       
    });

    document.getElementById('submit-lost').addEventListener('click', function(event) {
        event.preventDefault();
        array.forEach(element => {
            initiateStkPush('form-lost');
        });
        
    });
    

//    function initiateStkPush() {
//        .then(response => {
//            if (response.data.ResponseCode === '0') {
//                alert('Payment initiated. Please complete the payment on your phone.');
//                form.submit();
//             } else {
//                alert('Failed to initiate payment: ' + response.data.errorMessage);
//             }
//         })
//         .catch(error => {
//            alert('Error initiating payment: ' + error.message);
//         });
    
//             return redirect()->back()->with('successful payment');
//         }

</script>

@vite(['resources/js/app.js'])
</body>
</html>