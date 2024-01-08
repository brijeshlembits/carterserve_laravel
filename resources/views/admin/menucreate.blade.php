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
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper pb-0">

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Menu form</h4>
                            <p class="card-description"></p>
                            <form class="forms-sample" action="{{route('menuprocess')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value={{@$menu->id}}>
                                <input type="hidden" name="old_image" value={{@$menu->image}}>
                                <div class="form-group">
                                    <label for="exampleInputUsername1" >Title</label>
                                    <input type="text" name="title" value="{{@$menu->title}}" class="form-control" id="exampleInputUsername1"
                                        placeholder="title Name" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <textarea
                                    class="form-control"
                                    id="exampleTextarea1"
                                    rows="4"
                                    name="description"
                                    placeholder="Add Text"
                                  >{{@$menu->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Image</label>
                                    <input type="file" name="image" value="{{@$menu->image}}" class="form-control" id="exampleInputUsername1"
                                        placeholder="image" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Price</label>
                                    <input type="text" value="{{@$menu->price}}" name="price" class="form-control" id="exampleInputUsername1"
                                        placeholder="price" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Category</label>
                                    <input type="text" value="{{@$menu->category}}" name="category" class="form-control" id="exampleInputUsername1"
                                        placeholder="category name" />
                                </div>

                                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>



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
