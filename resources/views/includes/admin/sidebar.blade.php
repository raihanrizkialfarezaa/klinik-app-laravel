<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-toolbox"></i>
        </div>
       <a href="{{ route('dashboard') }}"><div class="text-center mb-3" style="color: white">Admin</div></a>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('poli*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('poli.index') }}">
            <i class="fas fa-fw fa-vote-yea"></i>
            <span>poli</span></a>
    </li>
    <li class="nav-item {{ Request::is('dokter*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dokter.index') }}">
            <i class="fas fa-fw fa-people-arrows"></i>
            <span>dokter</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>