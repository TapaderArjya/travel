
    @extends('frontpanel.layouts.main')
    @section('main-container')
    
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h2 class="display-3 text-white mb-3 animated slideInDown">Book your tour in the esiest way</h2>
                    <p class="fs-4 text-white mb-4 animated slideInDown"></p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
     
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h2>Fill in your details</h2>
                <p class="blue-text"></p>
                <div class="card">
                    <h5 class="text-center mb-4">Customized Your Holidays</h5>

                     @foreach ($users as $item)
                         
                     
                    <form class="form-card" id="BookingForm">

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Your Destination</label>
                                <input type="text" id="destinstion" name="destinstion" placeholder="" value="{{$item->header}}">
                            </div>
                           
                            <div class="col-sm-6 flex-column d-flex">
                                 <label class="form-control-label px-3">Price<span class="text-danger"> </span></label>
                                  <input type="text" id="price" name="price" placeholder="" value="{{$item->price}}">  
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Your type<span class="text-danger"> *</span></label>
                                <select name="select" id="select">
                                <option value="value">value</option>
                                <option value="Premium">Premium</option>
                            </select></div>
                           
                            <div class="col-sm-6 flex-column d-flex">
                                 <label class="form-control-label px-3">Date of travel<span class="text-danger"> *</span></label>
                                  <input type="date" id="date" name="date" placeholder="Enter your date">  
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Your email<span class="text-danger"> *</span>
                                </label> <input type="email" id="email" name="email" placeholder="Enter email">
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label>
                                 <input type="text" id="mob" name="mob" placeholder="Enter mobile number" onblur="validate(4)"> 
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <h6 class="bg-white text-center text-primary px-3">No of Travellers</h6>

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Adult<span class="text-danger"> *</span></label>
                                 <input type="text" id="quantityAdult" name="quantityAdult" placeholder=""> 
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Child<span class="text-danger"> *</span></label>
                                 <input type="text" id="quantityChild" name="quantityChild" placeholder=""> 
                            </div>
                        </div>
<hr>
                        <div class="row justify-content-between text-left">

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3"><span class="text-danger"> </span></label>
                                <button type="button" class="btn-block btn-primary" id="calculate_Price">Calculate Price</button> 
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3"><span class="text-danger"> </span></label>
                                <button type="submit" class="btn-block btn-primary" id="submitButton" onclick="return validation();">Book Tour</button> 
                            </div>
                        </div>
                        
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        
    @endsection
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

