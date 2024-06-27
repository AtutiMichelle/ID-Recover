<!-- resources/views/profile/partials/admin_sidebar.blade.php -->

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
            <a href= class="sidebar-link">
              <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('report_lost_id.form') }}" class="sidebar-link" onclick="showFoundIdForm();">
                <i class='bx bx-id-card'></i>
                <span class="text">Report Lost ID</span>
            </a>
        </li>
        <hr>
        <br>
        <li class="sidebar-item">
            <a href="{{ route('admin_retrieve_posted_id') }}" class="sidebar-link">
                <i class='bx bx-clipboard'></i>
                <span class="text">View Found IDs</span>
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
        <br>
    </ul>
    <ul class="side-menu">
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
