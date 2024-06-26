<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMBA</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="{{'dashboard' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>
    
    <!-- Nav Item Collapse Menu -->
    <li class="{{'inventaris/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('inventaris.view')}}">
            <i class="fas fa-solid fa-clipboard-list"></i>
            <span>Inventaris</span></a>
    </li>
    
    <li class="{{'buku/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('buku.view')}}">
            <i class="fas fa-solid fa-book-open"></i>
            <span>Buku</span></a>
    </li>

    <li class="{{'ebuku/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('ebuku.view')}}">
            <i class="fas fa-solid fa-book"></i>
            <span>E-book</span></a>
    </li>

    <li class="{{'kategori/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('cat.view')}}">
            <i class="fas fa-solid fa-icons"></i>
            <span>Kategori</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
    <!-- End of Sidebar -->
