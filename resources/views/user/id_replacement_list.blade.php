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
    @include('profile.partials.sidebar')

    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('profile.partials.navbar')

        <!-- NAVBAR -->

        <!-- Main content area -->
        <main>
<div class="container mt-4">
    <h2>ID Replacements</h2>
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>Admission</th>
                <th>Name</th>
                <th>Email</th>
                <th>Faculty</th>
                <th>Course</th>
                <th>Type</th>
                <th>Status</th>
                <th>Photo</th>
                <th>Police Abstract / Expired ID Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($idReplacementsList as $idReplacement)
                <tr>
                    <td>{{ $idReplacement->admission }}</td>
                    <td>{{ $idReplacement->name }}</td>
                    <td>{{ $idReplacement->email }}</td>
                    <td>{{ $idReplacement->faculty }}</td>
                    <td>{{ $idReplacement->course }}</td>
                    <td>{{ $idReplacement->type }}</td>
                    <td>{{ $idReplacement->status }}</td>
                    <td><img src="{{ asset('storage/' . $idReplacement->photo_path) }}" alt="Photo" width="50"></td>
                    <td>
                        @if($idReplacement->type == 'lost')
                            <a href="{{ asset('storage/' . $idReplacement->police_abstract_path) }}" target="_blank">View Police Abstract</a>
                        @else
                            <img src="{{ asset('storage/' . $idReplacement->id_photo_expired_path) }}" alt="Expired ID Photo" width="50">
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>
