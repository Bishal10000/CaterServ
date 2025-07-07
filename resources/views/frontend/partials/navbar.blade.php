<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="{{ route('frontend.home') }}" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span></h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('frontend.home') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('frontend.about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('frontend.services') }}" class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('frontend.events') }}" class="nav-item nav-link {{ request()->is('events') ? 'active' : '' }}">Events</a>
                    <a href="{{ route('frontend.menu') }}" class="nav-item nav-link {{ request()->is('menu') ? 'active' : '' }}">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light">
                            <a href="{{ route('frontend.booking') }}" class="dropdown-item">Booking</a>
                            <a href="#" class="dropdown-item">Our Blog</a>
                            <a href="#" class="dropdown-item">Our Team</a>
                            <a href="#" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('frontend.contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fas fa-search"></i>
                </button>
                <a href="{{ route('frontend.booking') }}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>