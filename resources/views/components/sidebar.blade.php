<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}"><i class="fas fa-business-time"></i> Face Detection </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FD</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item  ">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-tachometer-alt" style="color: #183153;"></i><span>Dashboard</span></a>

            </li>

            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link ">
                    <i class="fas fa-users" style="color: #183153;"></i><span>Users</span></a>
            </li>

            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link ">
                    <i class="fas fa-building" style="color: #183153;"></i><span>Company</span></a>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-concierge-bell" style="color: #183153;"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-user-lock" style="color: #183153;"></i>
                    <span>Permission</span>
                </a>
            </li>

    </aside>
</div>
