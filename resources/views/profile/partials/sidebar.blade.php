<!-- resources/views/profile/partials/sidebar.blade.php -->
<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button" onclick="toggleSidebar()" title="Toggle Sidebar">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="/#home">ID Recover</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <!-- Profile Link -->
            <form method="GET" action="{{ route('profile.edit') }}" style="display: inline;">
                @csrf
                <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="lni lni-user"></i>
                    <span>Profile Settings</span>
                </a>
            </form>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('submit_found_id') }}" class="sidebar-link" onclick="showFoundIdForm();">
                <i class="lni lni-layout"></i>
                <span>Post Found IDs</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('retrieve_posted_id') }}" class="sidebar-link">
                <i class="fas fa-clipboard-list"></i>
                <span>View Lost IDs</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('id_replacement_form') }}" class="sidebar-link">
                <i class="lni lni-popup"></i>
                <span>ID Replacement</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>FAQs</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" class="sidebar-link" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </form>
    </div>
</aside>
