<style>
    /* Styling for User Profile Dropdown */
.navbar-dropdown {
    position: relative;
}

.dropdown-user .avatar {
    width: 40px; /* Adjust the size of the avatar */
    height: 40px;
    overflow: hidden;
    border-radius: 50%;
}

.dropdown-user img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.dropdown-menu {
    min-width: 220px; /* Adjust the width of the dropdown menu */
}

.dropdown-item {
    padding: 10px 15px;
}

.dropdown-item .flex-shrink-0 {
    margin-right: 10px;
}

.dropdown-item span {
    display: block;
    font-weight: 600;
}

.dropdown-item small {
    color: #6c757d; /* Adjust the color of the email text */
}

/* Optional: Style the logout button */
.dropdown-item .ti-logout {
    color: #dc3545; /* Adjust the color of the logout icon */
}

/* Hover effect for dropdown items */
.dropdown-item:hover {
    background-color: #f8f9fa; /* Adjust the background color on hover */
}

/* Styling for the online indicator */
.avatar-online::before {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 12px;
    height: 12px;
    background-color: #28a745; /* Green color for online indicator */
    border-radius: 50%;
    border: 2px solid #ffffff;
}

/* Styling for the dropdown caret */
.dropdown-toggle::after {
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

/* Adjust the dropdown arrow color on hover */
.nav-item.dropdown:hover .dropdown-toggle::after {
    border-top-color: #007bff; /* Adjust the arrow color on hover */
}

</style>
<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="" class="nav-item nav-link">Services</a>
                    <a href="event.html" class="nav-item nav-link">Events</a>
                    <a href="" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light">
                            <a href="{{route('booking')}}" class="dropdown-item">Booking</a>
                            <a href="{{route('userbooking')}}" class="dropdown-item">Your Booking</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <?php if (Auth::check()) {
                        $sessionUser = Auth::user();
                    ?>
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar" >
                                <img src="theme/img/menu-01.jpg" alt class="rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="theme/img/menu-01.jpg" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">{{$sessionUser->first_name.' '.$sessionUser->last_name}}</span>
                                            <small class="text-muted">{{ $sessionUser->email }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('myaccount')}}">
                                    <i class="ti ti-user-check me-2 ti-sm"></i>
                                    <span class="align-middle">My Account</span>
                                </a>
                            <li>
                                <a class="dropdown-item noroute" href="{{ route('logout') }}">
                                    <i class="ti ti-logout me-2 ti-sm"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else{?>
                <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Login</a>
                        <?php }?>
            </div>
        </nav>
    </div>
</div>
<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control bg-transparent p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

