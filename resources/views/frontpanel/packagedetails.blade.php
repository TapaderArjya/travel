@extends('frontpanel.layouts.main')
@section('main-container')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
    
    <!-- Navbar & Hero End -->
    
@foreach ($users as $item)
    


<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('photo/'.$item->image)}}">
                        {{-- <img  src="{{$item->image}}"> --}}
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->header}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{$item->price}}</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>{{$item->long_desc}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="booking/{{$item->id}}" class="btn btn-sm btn-primary px-3" style="border-radius:  30px;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

@endforeach


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('frontpanel/lib/wow/wow.min.js')}}"></script>
<script src="{{url('frontpanel/lib/easing/easing.min.js')}}"></script>
<script src="{{url('frontpanel/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{url('frontpanel/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{url('frontpanel/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{url('frontpanel/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{url('frontpanel/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{url('frontpanel/js/main.js')}}"></script>
</body>

@endsection