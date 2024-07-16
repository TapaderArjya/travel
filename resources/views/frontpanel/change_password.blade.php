@extends('frontpanel.layouts.main')
@section('main-container')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">My Profile!!</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    
                   <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Profile</h6>
                        <h1 class="text-white mb-4">My Profile</h1>
                        <p class="mb-4">You can easily update your providing information as per your requirments.....</p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">My Profile</h1>
                        @php
                        if(Session('login'))
                    {
                            $records=Session::get('login');
                        @endphp

                        <form action="{{url('change_pwd')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="id" value="">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="oldpassword" name="oldpassword" placeholder="Old Password">
                                        <label for="name">Old Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="newpassword" name="newpassword" placeholder="New Password">
                                        <label for="email">New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                                        <label for="email">Confirm Password</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" onclick="return pwd()">Update</button>
                                </div>
                            </div>
                        </form>

                        @php
                    }
                        else
                    {
                        @endphp

                        <form action="{{url('changeuser_password')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="id" value="">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" name="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="mobile" name="mobile" placeholder="Mobile">
                                        <label for="mobile">Mobile</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="newpassword" name="newpassword" placeholder="New Password">
                                        <label for="email">New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                                        <label for="email">Confirm Password</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" onclick="return pwd()">Update</button>
                                </div>
                            </div>
                        </form>
                        @php
        
                    }
                        @endphp

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        @if (session('success'))
        <div class="alert alert-success">
          <strong>{{session('success')}}</strong>
        </div>
         @endif

         @if (session('fail'))
         <div class="alert alert-danger">
            <strong>{{session('fail')}}</strong>
        </div>  
          @endif
    </div>
    <!-- Booking Start -->
    <center>
        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{url('home')}}">Go Back To Home</a>
    </center>
    @if (session('update'))
      <div class="alert alert-success">
        {{session('update')}}
      </div>
       @endif

                
    <!-- 404 End -->

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

</html>
@endsection