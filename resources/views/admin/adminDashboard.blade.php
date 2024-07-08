<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  @vite(['resources/css/dash2.css', 'resources/js/dash2.js'])
  
	<!-- My CSS -->
	
	<title>Admin Dashboard</title>
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
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				{{-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> --}}
			</div>
			<ul class="box-info">
				<li>
					<i class='bx bx-id-card'></i>
					<span class="text">
						0
						{{-- <h3>{{ $lostIdReports }}</h3>  --}}
						<p>My Lost Id</p>
					</span>
				</li>
				<li>
					<i class='bx bx-search'></i>
					<span class="text">
						0
						 {{-- <h3>{{ $idReplacements }}</h3>  --}}
						<p>My ID Replacements</p>
					</span>
				</li>
				{{-- <li>
					<i class='bx bx-refresh'></i>
					<span class="text">
						{{-- <h3>{{ $idReplacementCount }}</h3> 
						<p>ID Replacements</p>
					</span>
				</li> --}}
			</ul>
		</div>
	</div>
	
				</main>
			<!-- MAIN -->
		</section>
		<!-- CONTENT -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"></script>
	
	</body>
	</html>