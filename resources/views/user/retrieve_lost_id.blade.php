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
@include('profile.partials.sidebar') <!-- Include sidebar directly -->

<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
    @include('profile.partials.navbar') <!-- Include sidebar directly -->
	<!-- NAVBAR -->
            <!-- Main content area -->
            <main>
            <h2>Retrieve Lost IDs</h2>

            <form action="{{ route('retrieve_lost_id.search') }}" method="POST" class="mb-4">
                @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by Admission, Name, Email, or Phone Number">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Admission</th>
                        <th>Name</th>
                        <th>Date Lost</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lostId as $lostId)
                        <tr>
                            <td>{{ $lostId->admission }}</td>
                            <td>{{ $lostId->name }}</td>
                            <td>{{ $lostId->date_lost }}</td>
                            <td>{{ $lostId->email }}</td>
                            <td>{{ $lostId->phone_number }}</td>
                            <td>
                                <a href="{{ route('edit_lost_id', $lostId->id) }}" class="btn btn-primary">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</section>
</body>
</html>
