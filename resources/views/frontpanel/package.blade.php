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

    <!-- Package Start -->
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>

                    @foreach ($users as $item)
                     
                        <div class="row g-4 justify-content-center" style="margin: 5px;">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 100%;">
                                <div>
                                <div class="package-item" style="width: 50%; float: left;"> 
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('photo/'.$item->image)}}" alt="" style="height: 200px">
                                    </div>
                                    <div class="d-flex border-bottom">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1 Person</small>
                                    </div>
                                </div>
                                    <div class="text-center" style="margin-left: 50%;"> 
                                        <h3 class="mb-0" style="color: rgb(99, 156, 41);">{{$item->header}}</h3><br>
                                        <h4 class="mb-0">₹ {{$item->price}}</h4>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                        <p>{{$item->short_desc}}</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            
                                            <a href="bookingdetails/{{$item->id}}" class="btn btn-sm btn-primary px-3" style="border-radius:30px;">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                
                    
	        
                     {{-- <tr>
                        <td>{{$item->header}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->short_desc}}</td>

                        <td>
                            <a href="packageinfo/{{$item->id}}"><button type="button" class="btn btn-warning" value="{{$item->id}}">Read More</button></a>
                        </td>
                        <td>
                            <a href="booking/{{$item->id}}"><button type="button" class="btn btn-success" value="{{$item->id}}">Book Now</button></a>
                        </td>
           
   
         </tr> --}}
       @endforeach
    </div>
 <!-- Package End -->


    

   <!-- Process Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
            <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-globe fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Choose A Destination</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Choose a destination package as per your requiments from multiple packages that are present in the package list..</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Pay Online</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">After selcting a particular package from the list You have to pay the amount that are mentioined in the package.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-plane fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Fly Today</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">You can book your tour as per your requirments and can easily fly today if the seats are available. And can customize your tour.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Start -->

        


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