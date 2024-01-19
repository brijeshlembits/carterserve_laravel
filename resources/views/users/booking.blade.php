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
    <style>
        #spinner {
            display: none;
        }

        /* Card Styles */
        .card {
            max-width: 400px;
            margin: 50px 24px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-header {
            background-color: #D4A762;
            color: #000;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #0056b3;
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            color: #333;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-text {
            color: #555;
            line-height: 1.6;
        }

        .btn-primary {
            background-color: #D4A762;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #000;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #000;
        }

        /* Navbar Styles */
        /* Please customize your navbar styles or use the default styles */

        /* Footer Styles */
        .copyright {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #444;
        }

        /* Back to Top Button Styles */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }

        .all-cards {
            display: flex;
            flex-wrap: wrap;
        }
        .lefttime{
            display: flex;
    justify-content: space-between;
        }
    </style>
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
    <div class="all-cards">
        @foreach ($book as $book)
            <?php
            $date = \Carbon\Carbon::parse($book->date);
            $today = \Carbon\Carbon::now();
            // dd($today);
            $leftDays = $date->diffInDays($today);
            $morethandays=$date->addDays(5) < $today;
            
            // dd($leftDays);
            
            ?>
            @if (!$morethandays )
            
                <div class="card">
                    <div class="card-header">
                        <b><i class="fas fa-book"></i> Booking</b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-calendar-alt"></i> {{ $book->event_type }}</h5>
                        <p class="card-text"><i class="fas fa-arrow-right"></i> In this Event Food {{ $book->food }} and Total People
                            {{ $book->no_people }}
                        </p>
                        <div class="lefttime">
                        <a href="#"
                            class="btn btn-primary"><i class="fas fa-calendar"></i> {{ \Carbon\Carbon::parse($book->date)->format('d-m-Y') }}</a>
                            {{-- {{dd($date)}} --}}
                        @if ($book->date < $today)
                            <a href="#" class="btn btn-primary"><i class="fas fa-check-circle"></i> Complated</a>
                        @else
                            <a href="#" class="btn btn-primary"><i class="fas fa-clock"></i> {{ $leftDays }} Days left</a>
                        @endif
                    </div>
                    </div>
                </div>
                @else

            @endif
            @endforeach
    </div>

    </div>




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
