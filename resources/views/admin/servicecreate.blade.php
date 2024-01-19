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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    #iconToolbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .icon {
        font-size: 24px;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
        width: 43px;
    }

    .icon:hover {
        color: #3498db;
    }

    .selected {
        color: #e74c3c; /* Change the color to your desired selection color */
    }
    .icon-box{
        overflow-y: scroll;
    height: 65px;
    }
</style>
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
                            <form class="forms-sample" action="{{route('serviceprocess')}}" method="post" enctype="multipart/form-data">
                                @csrf
                             
                                <input type="hidden" name="id" value={{@$service->id}}>
                                <input type="hidden" name="old_image" value={{@$service->icon}}>
                                <div class="form-group">
                                    <label for="exampleInputUsername1" >Title</label>
                                    <input type="text" name="title" id="title" value="{{@$service->title}}" class="form-control" id="exampleInputUsername1"
                                        placeholder="title Name" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <textarea
                                    class="form-control"
                                    id="description"
                                    rows="4"
                                    name="description"
                                    placeholder="Add Text"
                                  >{{@$service->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1" >Select Icon</label>
                                    <div class="icon-box">
                                    <div id="iconToolbox">
                                  
                                    
                                        <i class="fas fa-hamburger icon @if(@$service->icon=='fa-hamburger')selected @endif" onclick="selectIcon(this, 'fa-hamburger')"  value="fa-hamburger"   ></i>
                                        <i class="fas fa-hotdog icon  @if(@$service->icon=='fa-hotdog')selected @endif" onclick="selectIcon(this, 'fa-hotdog')"></i>
                                        <i class="fas fa-heart icon @if(@$service->icon=='fa-heart')selected @endif" onclick="selectIcon(this, 'fa-heart')"></i>
                                        <i class="fas fa-pizza-slice icon @if(@$service->icon=='fa-pizza-slice')selected @endif" onclick="selectIcon(this, 'fa-pizza-slice')"></i>
                                        <i class="fas fa-user icon @if(@$service->icon=='fa-user')selected @endif" onclick="selectIcon(this, 'fa-heart')"></i>
                                        <i class="fas fa-wine-glass-alt icon @if(@$service->icon=='fa-wine-glass-alt')selected @endif" onclick="selectIcon(this, 'fa-wine-glass-alt')"></i>
                                        <i class="fas fa-star icon @if(@$service->icon=='fa-star')selected @endif" onclick="selectIcon(this, 'fa-star')"></i>
                                        <i class="fas fa-walking icon @if(@$service->icon=='fa-walking')selected @endif" onclick="selectIcon(this, 'fa-walking')"></i>
                                        <i class="fas fa-trash icon @if(@$service->icon=='fa-trash')selected @endif" onclick="selectIcon(this, 'fa-trash')"></i>
                                        <i class="fas fa-smile icon @if(@$service->icon=='fa-smile')selected @endif" onclick="selectIcon(this, 'fa-smile')" value="fa-smile"></i>
                                        <i class="fas fa-wheelchair icon @if(@$service->icon=='fa-wheelchair')selected @endif" onclick="selectIcon(this, 'fa-wheelchair')"  value="fa-wheelchair"></i>
                                        <i class="fas fa-utensils icon @if(@$service->icon=='fa-utensils')selected @endif" onclick="selectIcon(this, 'fa-utensils')" value="fa-utensils"></i>
                                        <!-- Add more icons as needed -->
                                    </div>
                                </div>
                                    
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
   <!-- Add this line to include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   
        function selectIcon(iconElement, iconClass) {
            // Remove 'selected' class from all icons
            const icons = document.querySelectorAll('.icon');
            // const ico=document.getElementsByClassName('icon');
            // for(let i=0;i<ico.length;i++){

            //     console.log(ico[i]);
            // }
            const title = document.getElementById("title");
            const description = document.getElementById("description");
            console.log(iconClass);

            // console.log(title.value);

            icons.forEach(icon => {
                icon.classList.remove('selected');
            });

            // Add 'selected' class to the clicked icon
            iconElement.classList.add('selected');

            // Make an AJAX request to your server to save the selected icon
            $.ajax({
                url: '{{ route("serviceprocess") }}',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    selectIcon: iconClass,
                    _token: "{{ csrf_token() }}",
                    title: title.value, 
                    description: description.value 
                }),
                success: function (data) {
                    console.log('Icon saved successfully:', data);
                },
                error: function (error) {
                    console.error('Error saving icon:', error);
                }
            });
        }
      
 
</script>


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
