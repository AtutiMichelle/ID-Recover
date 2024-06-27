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
@include('profile.partials.sidebar') <!-- Include sidebar directly -->

<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
    @include('profile.partials.navbar') <!-- Include sidebar directly -->
	<!-- NAVBAR -->

		<!-- MAIN -->
		<main>     
<h1>Edit Found ID</h1>

    <form action="{{ route('update_found_id', $foundId->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- Form fields for editing the ID details -->
        <div class="form-group">
            <label for="admission_on_id">Admission on ID:</label>
            <input type="text" name="admission_on_id" class="form-control" value="{{ $foundId->admission_on_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="name_on_id">Name on ID:</label>
            <input type="text" name="name_on_id" class="form-control" value="{{ $foundId->name_on_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="course_on_id">Course on ID:</label>
            <input type="text" name="course_on_id" class="form-control" value="{{ $foundId->course_on_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="location_found">Location Found:</label>
            <input type="text" name="location_found" class="form-control" value="{{ $foundId->location_found }}" required>
        </div>
        
        <div class="form-group">
            <label for="date_found">Date Found:</label>
            <input type="date" name="date_found" class="form-control" value="{{ $foundId->date_found }}" required>
        </div>
        
        <div class="form-group">
            <label for="finder_email">Finder's Email:</label>
            <input type="email" name="finder_email" class="form-control" value="{{ $foundId->finder_email }}" required>
        </div>
        
        <div class="form-group">
            <label for="finder_phone_number">Finder's Phone Number:</label>
            <input type="text" name="finder_phone_number" class="form-control" value="{{ $foundId->finder_phone_number }}" required>
        </div>

        <div class="form-group">
            <label for="image_url">Image:</label>
            <input type="file" name="image_url" class="form-control">
            @if($foundId->image_url)
                <img src="{{ asset('storage/' . $foundId->image_url) }}" alt="ID Image" width="100">
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
   
        </html>
    </body>