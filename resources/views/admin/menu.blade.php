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
        .description{
            height: auto;
         width: 300px;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap;
         padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper pb-0">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title d-flex">Basic Table</h3> <a href={{route('menucreate')}} class="btn btn-info">+Create</a>
                        </p>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($menu as $row=>$menu)
                              <tr>
                                
                                <td>{{$row+1}}</td>
                                <td>{{$menu->title}}</td>
                               
                                <td>{{$menu->price}}</td>
                                <td ><div class="description">{{$menu->description}}</div></td>
                                <td>{{$menu->category}}</td>
                                <td><img src="{{$menu->image}}" alt="" style="height: 70px !important; width:70px !important;"></td>
                              
                                <td><a href="{{route('menudelete',$menu->id)}}" class="btn btn-danger">delete</a>
                                    <a href="{{route('menuupdate',$menu->id)}}" class="btn btn-info">update</a></td>
                                
                              </tr>
                              @endforeach
                             
                              
                              
                            </tbody>
                          </table>
                        </div>
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
