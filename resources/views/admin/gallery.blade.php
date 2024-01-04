<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <style>
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .gallery-item {
            width: 150px;
            height: 150px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            display: block;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .delete-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="container">
                    <h2 class="text-center mb-4">Animated Gallery</h2>
                    <a href="{{route('creategallery')}}" class="btn btn-info">+Create</a>
                    <div class="gallery-container">
                        <div class="gallery-item">
                            <img src="theme/img/menu-01.jpg" alt="Image 1">
                            <a href="{{route('dashboard')}}"><button class="delete-button"><i class="fa fa-times"></i></button></a>
                        </div>
                        <div class="gallery-item">
                            <img src="theme/img/menu-02.jpg" alt="Image 2">
                            <a href="{{route('dashboard')}}"><button class="delete-button"><i class="fa fa-times"></i></button></a>
                        </div>
                        <div class="gallery-item">
                            <img src="theme/img/blog-2.jpg" alt="Image 2">
                            <a href="{{route('dashboard')}}"><button class="delete-button"><i class="fa fa-times"></i></button></a>
                        </div>
                        
                        <!-- Add more gallery items as needed -->
                    </div>
                </div>
            
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </div>
            @include('admin.footer')
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script>
        function deleteImage(button) {
            var confirmDelete = confirm("Are you sure you want to delete this image?");
            if (confirmDelete) {
                // Get the parent container of the clicked button and hide it
                button.parentNode.style.display = 'none';
            }
        }
    </script>
</body>

</html>
