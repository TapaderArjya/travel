@extends('frontpanel.layouts.main')
@section('main-container')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Issue Raised</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Issue Raised</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
    
    <!-- Navbar & Hero End -->

    <div class="container">
        <div class="row justify-content-center mt-10">
          <div class="col-md-8">
            <div class="table-responsive">
              <table class="table table-striped table-haver table-bordered">
                <a href=""><thead class="" style="background-color: rgb(124, 206, 43); color:black; text-align:center;"></a>
                  @php
                      $cnt=1;
                  @endphp
                  <th>Sl No.</th>
                  <th>Id</th>
                  <th>Issue</th>
                  <th>Description</th>
                  <th>Admin Remark</th>
                  <th>Reg date</th>
                  <th>Remark date</th>
                </thead>
                @foreach ($users as $item)
                <tr>
                  <td>
                    @php
                        echo $cnt;
                    @endphp
                  </td>
                  <td>{{$item->id}}</td>
                  <td>{{$item->issue}}</td>
                  <td>{{$item->description}}</td>
                  <td>{{$item->admin_remark}}</td>
                  <td>{{$item->posting_date}}</td>
                  <td>{{$item->remak_date}}</td>
                  
                    
                  
                
                  
                </tr>
                @php
                        $cnt=$cnt+1;
                    @endphp
                @endforeach
                
              </table>
            </div>
          </div>
        </div>
      </div>


    

    
        


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