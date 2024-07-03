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
                   
                        <h1>All Users</h1>
                
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-primary">
                                    <th>ID</th>
                                    <th>Admission</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->admission }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('edit_user', $user->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('delete_user', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
             
</main>
</section>
