<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CaterServ - Catering Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="theme/lib/animate/animate.min.css" rel="stylesheet">
    <link href="theme/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="theme/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="theme/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    @include('users.header')
    <!-- Navbar End -->





    <!-- Hero Start -->
    @include('users.hero')
    <!-- Hero End -->


    <!-- About Satrt -->
    @include('users.about')
    <!-- About End -->


    <!-- Fact Start-->
    @include('users.fact')
    <!-- Modal Video -->

    <!-- Fact End -->


    <!-- Service Start -->
    @include('users.service')
    <!-- Service End -->


    <!-- Events Start -->
    @include('users.event')
    <!-- Events End -->


    <!-- Menu Start -->
    @include('users.menu')
    <!-- Menu End -->


    <!-- Book Us Start -->
    @include('users.book')
    <!-- Book Us End -->


    <!-- Team Start -->
    @include('users.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('users.testimonial')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @include('users.blog')
    <!-- Blog End -->


    <!-- Footer Start -->
    @include('users.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                            Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="theme/lib/wow/wow.min.js"></script>
    <script src="theme/lib/easing/easing.min.js"></script>
    <script src="theme/lib/waypoints/waypoints.min.js"></script>
    <script src="theme/lib/counterup/counterup.min.js"></script>
    <script src="theme/lib/lightbox/js/lightbox.min.js"></script>
    <script src="theme/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="theme/js/main.js"></script>
</body>

</html>
