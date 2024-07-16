<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>-Tourist-</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontpanel/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontpanel/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontpanel/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontpanel/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontpanel/css/style.css')}}" rel="stylesheet">
    <link href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>
    <link href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   
    

   
    <script>
    //     $(document).ready(function(){
    //         $('#calculate_Price').on('click',function(){
    //             alert('Total price');
    //         });

    //         $('#BookingForm').on('submit',function(e){
    //         e.preventDefault();
    //             var data=$('#BookingForm').serialize();
    //             alert(data);
    //             $.ajax({
    //                 url:"",
    //                 type:"POST",
    //                 data:{
    //                     "_token":"{{csrf_token()}}",
    //                     data:data,
    //                 },
    //             });
                
    //         });
    //         $('#QueryForm').on('submit',function(e){
    //         e.preventDefault();
    //             var data=$('#QueryForm').serialize();
                
                
                
    //         });
           
    // });

    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
            
    function pwd()
    {
    var a=document.getElementById('oldpassword').value;
    var b=document.getElementById('newpassword').value;
    var c=document.getElementById('confirmpassword').value;
    var b=document.getElementById('newpassword').value;
    var c=document.getElementById('confirmpassword').value;

    if(a=="")
    {
        alert("Please enter oldpassword")
        return false;
    }
    if(b=="")
    {
        alert("Please enter newpassword")
        return false;
    }
    if(c=="")
    {
        alert("Please enter confirmpassword")
        return false;
    }

    if(b!=c)
    {
        alert("New Password and Confirm Password Field do not match  !!")
        return false;
    }
}

function query()
{
    alert("Your query has been successfully submited");
}
        
    </script>
    

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @php
        if(Session('login')){
            $records=Session::get('login');

    @endphp
        
 <!-- Topbar Start -->
 <div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-3 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="{{url('user_edit',[$records->id])}}"><small class="me-3 text-light"><i class="fa fa-user" aria-hidden="true"></i> My Profile</small></a>
                <a href="{{url('edit_pwd',[$records->id])}}"><small class="me-3 text-light"><i class="fa fa-key" aria-hidden="true"></i> Change Password</small></a>
                <a href="{{url('user_tour',[$records->email])}}"><small class="me-3 text-light"><i class="fa fa-history" aria-hidden="true"></i> My Tour History</small></a>
                <a href="{{url('raised_issue',[$records->email])}}"><small class="me-3 text-light"><i class="fa fa-bug" aria-hidden="true"></i> Raised Issues</small></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class=""></i>Wellcome:</small>
                <a class="" href=""><i class=""><small class="me-3 text-light">{{$records->name}}</small></i></a>
                <a class="" href="{{url('logout')}}"><small class="me-3 text-light"><i class="">Logout</i></small></a>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
                   <div class="modal fade" id="myModal2">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <p style="color: rgb(99, 156, 41);">Issues that you have faced</p>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                       </div>

                       <!-- Modal body -->
                    <div class="modal-body">
                      <div class="modal-body">
                            <form action="{{url('user_issue')}}" method="POST">
                          @csrf
                          <input type="hidden" name="name" value="{{$records->name}}">
                          <input type="hidden" name="email" value="{{$records->email}}">
                          <input type="hidden" name="mobile" value="{{$records->mobile}}">
                          <div class="mb-3">
                            <label for="pwd" class="form-label">Issue:</label>
                                        <select class="form-select bg-transparent" id="select1" name="issue">
                                            <option value="">Select Issue</option>
                                            <option value="Booking Issue">Booking Issue</option>
                                            <option value="Cancellation">Cancellation</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                          
                                <div class="mb-3">
                                <label for="comment">Comments:</label>
                                <textarea class="form-control" rows="3" id="comment" name="comment"></textarea> 
                              </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form> 
                  
                      </div>
                     </div>

                       
                      </div>
                    </div>
                  

<!-- Topbar End -->
    @php
}
            else
            {
        @endphp
    
            <div class="container-fluid bg-dark px-5 d-none d-lg-block">
                <div class="row gx-0">
                    <div class="col-lg-8 text-center text-lg-start mb-3 mb-lg-0">
                        <div class="d-inline-flex align-items-center" style="height: 45px;">
                            <a class="" href="admin_log"><small class="me-3 text-light"><i class=""></i>Admin Login</small></a>
                        </div>
                    </div>
                    
        
                    
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-inline-flex align-items-center" style="height: 45px;">
                             <!-- Button trigger modal -->
                             <a class="" href="" data-bs-toggle="modal" data-bs-target="#myModal" >Sign Up</small>/</a>

                             
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <p style="color: rgb(99, 156, 41);">Create your account</p>
                               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                             </div>

                             <!-- Modal body -->
                             <div class="modal-body">
                                <div class="modal-body">
                            <form action="{{url('user_registration')}}" method="POST">
                                @csrf
                                <div class="mb-3 mt-3">
                                  <label for="name" class="form-label">Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
                                </div>
                                <div class="mb-3 mt-3">
                                  <label for="email" class="form-label">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                                </div>
                                <div class="mb-3">
                                  <label for="mobile" class="form-label">Mobile:</label>
                                  <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required="">
                                </div>
                                <div class="mb-3">
                                  <label for="pwd" class="form-label">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form> 
                        
                    </div>
                             </div>

                             <!-- Modal footer -->
                              <div class="modal-footer">
                                
                            <p style="font-size:small;">By logging in you agree to our <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
                        </center>
                              </div>
                          
                            </div>
                          </div>
                        </div>




                             <a href="" data-bs-toggle="modal" data-bs-target="#myModal1">
                                Sign In
              </button></a>
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
                            <div class="modal-body">
                                  <form action="{{url('sing_in')}}" method="POST">
                                @csrf
                                <div class="mb-3 mt-3">
                                  <label for="email" class="form-label">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
            
                                <div class="mb-3">
                                  <label for="pwd" class="form-label">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                </div>
                    
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <p><a href="edituser_password">Forgot Password</a></p>
                              </form> 
                        
                            </div>
                           </div>

                             <!-- Modal footer -->
                              <div class="modal-footer">
                                
                            <p style="font-size:small;">By logging in you agree to our <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
                        </center>
                              </div>
                          
                            </div>
                          </div>
                        </div>

                        
              <!-- The Modal -->
                        <div class="modal fade" id="myModal3">
                          <div class="modal-dialog">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <p style="color: rgb(99, 156, 41);">Enquery</p>
                               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                             </div>

                             <!-- Modal body -->
                          <div class="modal-body">
                            <div class="modal-body">
                              <form action="{{url('user_enquery')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="name" class="form-label">Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                                </div>
                                <div class="mb-3">
                                  <label for="mobile" class="form-label">Mobile:</label>
                                  <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required="">
                                </div>
                                <div class="mb-3">
                                  <label for="subject" class="form-label">Subject:</label>
                                  <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" required="">
                                </div>
                                <div class="mb-3">
                                <label for="comment">Comments:</label>
                                <textarea class="form-control" rows="2" id="comment" name="comment" placeholder="Enter description"></textarea> 
                              </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form> 
                        
                            </div>
                           </div>

                             <!-- Modal footer -->
                              <div class="modal-footer">
                                
                            
                        </center>
                              </div>
                          
                            </div>
                          </div>
                        </div>
    
                            <a class="" href=""><i class=""><small class="me-3 text-light"></small></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        
            @php
        
        }
        @endphp

   

    



    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Travelia</h1>
                 <!-- <img src="img/logo.png" alt="Logo"> --> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('home')}}" class="nav-item nav-link">Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('getdata')}}" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('destination')}}" class="dropdown-item">Popular Destination</a>
                            
                            <?php
                            if(Session('login')){
                            $records=Session::get('login');
                            ?>
                            <a href="{{url('getdata')}}" class="dropdown-item">Booking</a>
                            <?php
                            }
                            else
                            {
                            ?>
                            <a href="" class="dropdown-item" onclick="return confirm('Pease selct a particular package from list!!!!!')">Booking</a>
                            <?php
                            }
                            ?>
                            <a href="{{url('team')}}" class="dropdown-item">Travel Guides</a>
                            <a href="{{url('testimonial_get')}}" class="dropdown-item">Testimonial</a>
                            <a href="{{url('terms_condition')}}" class="dropdown-item">Terms and Condition</a>
                            <a href="{{url('404')}}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>

                    @php
                      if(Session('login')){
                        @endphp

                    <a href="" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#myModal2">Need Help</a>
                    @php
                  }
                  else {
                    @endphp
                    <a href="" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#myModal3">Enquery</a>
                    @php
                  }
                  @endphp
                   
                    
                    
                  </div>
                    
                </div>
                <a href="register" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>

       
    </div>
    <!-- Navbar & Hero End -->

