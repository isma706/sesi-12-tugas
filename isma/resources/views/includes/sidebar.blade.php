<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=""></i>
        </div>
        <div class="sidebar-brand-text mx-3">Indosat</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{route('news.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Product</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('about.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>About</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('bisnis.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Bisnis</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('investor.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Investor</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
