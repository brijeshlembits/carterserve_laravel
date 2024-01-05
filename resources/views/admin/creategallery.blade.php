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
          #upload-container {
            text-align: center;
        }

        #image-preview {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        #image-preview img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 5px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper pb-0">

                <div id="upload-container">
                    <h1>Multiple Image Upload</h1>
                    <form id="image-upload-form" enctype="multipart/form-data" method="post" action="{{ route('uploadmultipleimage') }}">
                        @csrf
                        <label for="">Categories :</label>
                        <select name="category">
                            
                            <option value="Wedding">Wedding</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Cocktail">Cocktail</option>
                            <option value="Buffer">Buffer</option>
                        </select>
                        <input type="file" id="image-input" name="images[]" multiple accept="image/*">
                        <button type="submit">Upload Images</button>
                    </form>
                
                    <div id="image-preview"></div>
                </div>
                
                <script>
                    const imageInput = document.getElementById('image-input');
                    const imagePreview = document.getElementById('image-preview');
                
                    imageInput.addEventListener('change', handleImageUpload);
                
                    function handleImageUpload() {
                        imagePreview.innerHTML = ''; // Clear previous preview
                
                        const files = imageInput.files;
                
                        for (const file of files) {
                            const reader = new FileReader();
                
                            reader.onload = function (e) {
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                imagePreview.appendChild(img);
                            };
                
                            reader.readAsDataURL(file);
                        }
                    }
                </script>
                




            </div>
            @include('admin.footer')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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
</body>

</html>
