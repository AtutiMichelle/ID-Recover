<!DOCTYPE html>
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
@include('profile.partials.sidebar')

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
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('submit_found_id') }}" enctype="multipart/form-data">
                    @csrf
                    <h2>Submit Found ID</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-id-card'></i></span>
                        <x-text-input id="admission_on_id" class="block mt-1 w-full" type="text" name="admission_on_id" required autofocus />
                        <label>Admission On ID</label>
                        <x-input-error :messages="$errors->get('admission_on_id')" class="mt-2" />
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user'></i></span>
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
                    
                    {{-- <div class="input-box">
                        <span class="icon"><i class='fas fa-map-marker-alt'></i></span>
                        <x-text-input id="location_found" class="block mt-1 w-full" type="text" name="location_found" />
                        <label>Location Found</label>
                        <x-input-error :messages="$errors->get('location_found')" class="mt-2" />
                    </div> --}}
                    <div class="input-box">
                        <span class="icon"><i class='fas fa-calendar-alt'></i></span>
                        <x-text-input id="date_found" class="block mt-1 w-full" type="date" name="date_found" required />
                        <label for='date_found'>Date Found</label>
                        <x-input-error :messages="$errors->get('date_found')" class="mt-2" />
                    </div>
                    {{-- <div class="input-box">
                        <span class="icon"><i class='fas fa-envelope'></i></span>
                        <x-text-input id="finder_email" class="block mt-1 w-full" type="text" name="finder_email" />
                        <label for="finder_email">Finder's Email</label>
                        <x-input-error :messages="$errors->get('finder_email')" class="mt-2" />
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-phone'></i></span>
                        <x-text-input id="finder_phone_number" class="block mt-1 w-full" type="text" name="finder_phone_number" />
                        <label for="finder_phone_number">Finder's Phone Number</label>
                        <x-input-error :messages="$errors->get('finder_phone_number')" class="mt-2" />
                    </div> --}}
                    <div class="input-box file-input">
                        <input id="image_url" type="file" name="image_url" accept="image/*" required />
                        <label for="image_url"></label>
                        <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
                    </div>
                    <button class="btn3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main> 
</section>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>
