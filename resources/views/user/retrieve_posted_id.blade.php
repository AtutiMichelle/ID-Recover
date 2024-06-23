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
    
</head>
<body>
    <div class="wrapper">
        @include('profile.partials.sidebar') <!-- Include sidebar directly -->
        
        <div class="main">
            @include('profile.partials.navbar') <!-- Include navbar directly -->

    <div class="container mt-5">
        <h2 class="mb-4">List of Found IDs</h2>

        <!-- Search Form -->
        <form action="{{ route('retrieve_posted_id') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request()->input('search') }}">
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
                @foreach($foundId as $foundId)
                    <tr>
                        <td>{{ $foundId->id }}</td>
                        <td>{{ $foundId->admission_on_id }}</td>
                        <td>{{ $foundId->name_on_id }}</td>
                        <td>{{ $foundId->course_on_id }}</td>
                        <td>{{ $foundId->location_found }}</td>
                        <td>{{ $foundId->date_found }}</td>
                        <td>{{ $foundId->finder_email }}</td>
                        <td>{{ $foundId->finder_phone_number }}</td>
                        <td>
                            @if($foundId->image_url)
                                <img src="{{ asset('storage/' . $foundId->image_url) }}" alt="ID Image" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
