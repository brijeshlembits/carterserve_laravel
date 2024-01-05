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
    margin-bottom: 23px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure images cover the entire container */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    display: block;
}

.gallery-item:hover {
    transform: scale(1.1); /* Increased scale on hover */
}

.delete-button {
    position: absolute;
    top: 8px;
    right: 8px;
    background-color: #e74c3c;
    color: #fff;
    border: none;
    border-radius: 50%;
    padding: 8px; /* Increased padding for a larger button */
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.delete-button:hover {
    background-color: #c0392b;
}
.gallery-item p {
    margin-top: 8px; /* Add space between the image and the paragraph */
    font-size: 14px;
    color: #333;
    text-align: center; /* Center the text */
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
                    <a href="{{ route('creategallery') }}" class="btn btn-info">+Create</a>

                    <div class="gallery-container">
                        <!-- Check if there are gallery items -->
                        @if (count($gallery) > 0)
                            @foreach ($gallery as $galleryItem)
                                <?php
                                $images = explode('|', $galleryItem->image);
                                ?>
                                @foreach ($images as $image)
                                    <div class="gallery-item">
                                        <img src="{{ URL::to($image) }}" alt="Gallery Image">
                                        <a
                                            href="{{ route('deleteimage', ['id' => $galleryItem->id, 'image' => $image]) }}">
                                            <button class="delete-button"><i class="fa fa-times"></i></button>
                                        </a>
                                        <p value="{{ $galleryItem->category }}">{{ $galleryItem->category }}</p>
                                    </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No images in the gallery</p>
                        @endif
                    
                    
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
