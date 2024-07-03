

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
@include('profile.partials.sidebar') <!-- Include sidebar directly -->

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
						{{-- <h3>{{ $lostIdCount }}</h3> --}}
						<p>Lost IDs</p>
					</span>
				</li>
				<li>
					<i class='bx bx-search'></i>
					<span class="text">
						{{-- <h3>{{ $foundIdCount }}</h3> --}}
						<p>Found IDs</p>
					</span>
				</li>
				<li>
					<i class='bx bx-refresh'></i>
					<span class="text">
						{{-- <h3>{{ $idReplacementCount }}</h3> --}}
						<p>ID Replacements</p>
					</span>
				</li>
			</ul>
			<!-- Example table in dashboard.blade.php -->
<div class="table-data">
  <div class="order">
      <div class="head">
          <h3>New Users Registered</h3>
          <i class='bx bx-search'></i>
          <i class='bx bx-filter'></i>
      </div>
      <table>
          <thead>
              <tr>
                  <th>User</th>
                  <th>Date Joined</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
              @foreach($newUsers as $user)
              <tr>
                  <td>
                      <p>{{ $user->name }}</p>
                  </td>
                  <td>{{ $user->created_at->format('Y-m-d') }}</td>
                  <td><span class="status completed">Active</span></td>
              </tr>
              @endforeach
          </tbody>
      </table>
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
