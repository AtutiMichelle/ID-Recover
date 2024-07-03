
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  @vite(['resources/css/dash2.css', 'resources/js/dash2.js'])
  @vite(['resources/css/app.css', 'resources/js/app.js'])
	<!-- My CSS -->
	
	<title>Dashboard</title>
</head>
<body>

<!-- SIDEBAR -->
@include('profile.partials.admin_sidebar') <!-- Include sidebar directly -->

<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
    @include('profile.partials.navbar') <!-- Include sidebar directly -->
	<!-- NAVBAR -->

		<!-- MAIN -->
		
			<main>     
				<div class="login-section">
					<div class="form-box login">
						<x-auth-session-status class="mb-4" :status="session('status')" />
						<form method="POST" action="{{ route('report_lost_id.submit') }}" enctype="multipart/form-data">
							@csrf
							<h2>Report Lost ID</h2>
							<div class="input-box">
								<span class="icon"><i class='bx bx-id-card'></i></span>
								<x-text-input id="admission" class="block mt-1 w-full" type="text" name="admission" required autofocus />
								<label>Admission</label>
								<x-input-error :messages="$errors->get('admission')" class="mt-2" />
							</div>
							<div class="input-box">
								<span class="icon"><i class='bx bx-user'></i></span>
								<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
								<label>Name</label>
								<x-input-error :messages="$errors->get('name')" class="mt-2" />
							</div>
							<div class="input-box">
								<span class="icon"><i class='fas fa-user-graduate'></i></span>
								<x-text-input id="course" class="block mt-1 w-full" type="text" name="course" required />
								<label>Course</label>
								<x-input-error :messages="$errors->get('course')" class="mt-2" />
							</div>
							
							
							<div class="input-box">
								<span class="icon"><i class='fas fa-calendar-alt'></i></span>
								<x-text-input id="date_lost" class="block mt-1 w-full" type="date" name="date_lost" required />
								 {{-- <label for='date_lost'>Date Lost</label>  --}}
								<x-input-error :messages="$errors->get('date_lost')" class="mt-2" />
							</div>
							<div class="input-box">
								<span class="icon"><i class='fas fa-envelope'></i></span>
								<x-text-input id="finder_email" class="block mt-1 w-full" type="text" name="email" required />
								<label for="email">Email</label>
								<x-input-error :messages="$errors->get('email')" class="mt-2" />
							</div>
							<div class="input-box">
								<span class="icon"><i class='bx bx-phone'></i></span>
								<x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" required />
								<label for="phone_number">Phone Number</label>
								<x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
							</div>
							
							<!-- Add input fields for other data such as finder's name, finder's contact, etc. -->
				
							<button class="btn3" type="submit">Submit</button>
						</form>
					</div>
				</div>
				</main> 
				</section>    
				
				</div>
				
				
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
				crossorigin="anonymous"></script>
				
</main>

</body>
</html>
