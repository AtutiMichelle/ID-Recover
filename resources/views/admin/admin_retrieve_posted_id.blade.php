<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Posted IDs</title>
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/dash2.css', 'resources/js/dash2.js'])
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
            <!-- Main content area -->
            <main>
        <h2 class="mb-4">List of Found IDs</h2>

        <!-- Search Form -->
        <form action="{{ route('retrieve_posted_id') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ $search }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    
        <table class="table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Admission on ID</th>
                    <th>Name on ID</th>
                    <th>Course on ID</th>
                    <th>Location Found</th>
                    <th>Date Found</th>
                    <th>Finder's Email</th>
                    <th>Finder's Phone Number</th>
                    <th>Image</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($foundId as $found)
                <tr>
                    <td>{{ $found->id }}</td>
                    <td>
                        @if(auth()->user()->isAdmin())
                            {{ $found->admission_on_id }}
                        @else
                            {{ substr_replace(substr_replace($found->admission_on_id, 'xx', 0, 2), 'xx', -2) }}
                        @endif
                    </td>
                    <td>{{ $found->name_on_id }}</td>
                    <td>{{ $found->course_on_id }}</td>
                    <td>{{ $found->location_found }}</td>
                    <td>{{ $found->date_found }}</td>
                    <td>{{ $found->finder_email }}</td>
                    <td>{{ $found->finder_phone_number }}</td>
                    <td>
                        @if($found->image_url)
                            @if(auth()->user()->isAdmin())
                                <img src="{{ asset('storage/' . $found->image_url) }}" alt="ID Image" width="100">
                            @else
                                <img src="{{ asset('storage/' . $found->image_url) }}" alt="ID Image" class="blurred-image">
                            @endif
                        @else
                            No Image
                        @endif
                    </td>
                    
                </tr>
                @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
