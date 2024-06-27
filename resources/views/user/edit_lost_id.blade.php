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
              
            <h1>Edit Lost ID</h1>

            <form method="POST" action="{{ route('update_lost_id', $lostId->id) }}">
                @csrf
               
                <div class="form-group">
                    <label for="admission">Admission</label>
                    <input type="text" name="admission" class="form-control" value="{{ $lostId->admission }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $lostId->name }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="date_lost">Date Lost</label>
                    <input type="date" name="date_lost" class="form-control" value="{{ $lostId->date_lost }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $lostId->email }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ $lostId->phone_number }}" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </main>
</section>
</body>
</html>
