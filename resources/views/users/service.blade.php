<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">
                Our Services
            </small>
            <h1 class="display-5 mb-5">What We Offer</h1>
        </div>
        <div class="row g-4 sortable-cards">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp service-card">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas {{$service->icon}} fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">{{$service->title}}</h4>
                            <p class="mb-4">{{$service->description}}</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- jsDelivr :: Sortable :: Latest (https://www.jsdelivr.com/package/npm/sortablejs) -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    const sortable = new Sortable(document.querySelector('.sortable-cards'), {
        swapThreshold: 1,
        invertSwap: true,
        animation: 150,
        handle: '.service-card',
    });
</script>
