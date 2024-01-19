<form action="{{ route('bookcreate') }}" method="post">
    @csrf
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-1">
                    <img src="theme/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start"
                        style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book
                                Us</small>
                            <h1 class="display-5 mb-5">Where you want Our Services</h1>
                        </div>
                        <div class="row g-4 form">
                            <div class="col-lg-4 col-md-6">
                                <select id="Country-dropdown" class="form-select border-primary p-2" name="country"
                                    aria-label="Default select example">
                                    <option selected>Select Country</option>
                                    @foreach ($country as $countrys)
                                        <option value="{{ $countrys->id }}">{{ $countrys->name }}
                                        </option>
                                    @endforeach



                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select id="city-dropdown" class="form-select border-primary p-2" name="city"
                                    aria-label="Default select example">




                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select id="place-dropdown" class="form-select border-primary p-2" name="place"
                                    aria-label="Default select example">
                                   
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="event_type"
                                    aria-label="Default select example">
                                    {{-- <option selected>Small Event</option> --}}
                                    <option  selected>Event Type</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="Cocktail">Cocktail</option>
                                    <option value="Buffer">Buffer</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="people"
                                    aria-label="Default select example">
                                    <option selected>No. Of Palace</option>
                                    <option value="100-200">100-200</option>
                                    <option value="300-400">300-400</option>
                                    <option value="500-600">500-600</option>
                                    <option value="700-800">700-800</option>
                                    <option value="900-1000">900-1000</option>
                                    <option value="1000+">1000+</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="food"
                                    aria-label="Default select example">
                                    <option selected>Veg or Non_veg</option>
                                    <option value="veg">Vegetarian</option>
                                    <option value="non_veg">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="mobile" class="form-control border-primary p-2" name="phone"
                                    placeholder="Your Contact No.">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" class="form-control border-primary p-2" name="date"
                                    placeholder="Select Date">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control border-primary p-2" name="email"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="col-12 text-center">
                                @if(Auth::check())
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit
                                    Now</button>
                                    @else
                                    <a href="{{route('login')}}" class="btn btn-primary px-5 py-3 rounded-pill">Submit
                                        Now</a>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="theme/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end"
                        style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
            </div>
        </div>
    </div>

</form>
<script>
    $(document).ready(function() {
        $('#Country-dropdown').on('change', function() {
            var idCountry = this.value;
            $("#city-dropdown").html('');
             $.ajax({
                url: "{{ route('city') }}",
                type: 'post',
                data: {
                    country_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#city-dropdown').html(
                        '<option value="">---- Select City --</option>');
                    $.each(result, function(key, value) {
                        $('#city-dropdown').append('<option value="' + value.id +
                            '">' + value.name + '</option>');
                    });
                    $('#place-dropdown').html(
                        '<option value="">-- Select place --</option>');
                }
            });
        });
        $('#city-dropdown').on('change', function() {
            var idCity = this.value;
            $("#place-dropdown").html('');
            $.ajax({
                url: "{{ route('place') }}",
                type: 'post',
                data: {
                    city_id: idCity,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#place-dropdown').html(
                        '<option value="">---- Select Place --</option>');
                    $.each(result, function(key, value) {
                        $('#place-dropdown').append('<option value="' + value.id +
                            '">' + value.name + '</option>');
                    });

                }
            })
        })
    })
</script>
