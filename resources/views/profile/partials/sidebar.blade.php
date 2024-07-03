<!-- resources/views/profile/partials/sidebar.blade.php -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">ID Recover</span>
    </a>
    <ul class="side-menu top">
        <li class="sidebar-item">
            <form method="GET" action="{{ route('profile.edit') }}" style="display: inline;">
                @csrf
                <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class='bx bx-user'></i>
                    <span class="text">Profile Settings</span>
                </a>
            </form>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
              <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('retrieve_lost_id.form') }}" class="sidebar-link">
                <i class='bx bx-id-card'></i>
                <span class="text">Lost ID List</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('submit_found_id') }}" class="sidebar-link" onclick="showFoundIdForm();">
                <i class='bx bx-upload'></i>
                <span class="text">Post Found IDs</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('retrieve_posted_id') }}" class="sidebar-link">
                <i class='bx bx-clipboard'></i>
                <span class="text">View Found IDs</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('view_users') }}" class="sidebar-link">
                <i class='bx bxs-user-check'></i>
                <span class="text">View System Users</span>
            </a>
        </li>
        <hr>
        <br>

        <li class="sidebar-item">
            <a href="{{ route('id_replacement_form') }}" class="sidebar-link">
                <i class='bx bx-refresh'></i>
                <span class="text">ID Replacement</span>
            </a>
        </li>
        
        <hr>
    </ul>
    <ul class="side-menu">
        
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class='bx bx-log-out'></i>
                    <span class="text">Logout</span>
                </a>
            </form>
        </li>
    </ul>
  </section>