@extends('frontpanel.layouts.main')
@section('main-container')



<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Booking</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

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
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
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
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
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
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    
     @php
     if(Session('login')){
         $records=Session::get('login');
     }
 @endphp
  @foreach ($users as $item)

     <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h2 class="text-white mb-4">Online Booking Of {{$item->header}}</h2>
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('photo/'.$item->image)}}">
                        </div>
                        <h3 class="mb-4" style="color: rgb(99, 156, 41);">{{$item->header}}</h3>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                          
                    </div>
                    @endforeach
    <div class="col-md-6">
        <h1 class="text-white mb-4">Book A Tour</h1>
<form action="{{url('bookdata')}}" method="POST">
    @csrf
    <div class="row g-3">
        <input type="hidden" name="packid" value="{{$item->id}}">
        <input type="hidden" name="useremail" value="{{$records->email}}">
        <input type="hidden" name="package_name" value="{{$item->short_desc}}">
        <div class="col-md-6">
            <div class="form-floating date" id="date2" data-target-input="nearest">
                <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" name="fromdate" placeholder="Date & Time" data-target="#date2" data-toggle="datetimepicker" required=""/>
                <label for="datetime">From Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" name="todate" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required=""/>
                <label for="datetime">To Date</label>
            </div>
        </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" name="message" style="height: 100px" required=""></textarea>
                    <label for="message">Special Request</label>
                </div>
            </div>
            
                
           
            @php
            
                if(Session('login'))
                {
                    @endphp
                    <div class="col-12">
                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                    </div>
                </form>
 
                    @php
                }
                else {
                    @endphp   
                    <div class="col-12">
                <button class="btn btn-outline-light w-100 py-3" type="button" data-bs-toggle="modal" data-bs-target="#myModal1">Book Now</button>
                    </div>

                    <div class="container mt-3">
             
          </div>
                  
          <!-- The Modal -->
          <div class="modal fade" id="myModal1">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">   
                    <p style="color: rgb(99, 156, 41);">Signin with your account</p>                                       
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{url('sing_in')}}" method="GET">
                        @csrf
                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3">
                          <label for="pwd" class="form-label">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
            
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form> 
                </div>
    

    <!-- Modal footer -->
   
    <div class="modal-footer">
        <center>
        <p style="font-size:small;">By logging in you agree to our <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
    </center>
    </div>

  </div>
  
                   </div>
                 </div>
        @php
                }
            @endphp
                    
                      
    
  
        

                            </div>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
     
    
     
     
     
    
    


    
        

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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