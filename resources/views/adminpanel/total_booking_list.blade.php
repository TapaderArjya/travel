@extends('adminpanel.layouts.main')
@section('main-container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking list</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
              <li class="breadcrumb-item active">Booking list</li>
            </ol>
          </div>
        </div>
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Total Booking</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          @php
                      $cnt=1;
          @endphp
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Package</th>
                  <th>Regdate</th>
                  <th>From-To</th>
                  <th>Comment</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

          <tbody>
          @foreach ($user as $item)
          <tr>
          <td>@php
                echo $cnt;
            @endphp
          </td>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->mobile }}</td>
          <td>{{$item->package_name }}</td>
          <td>{{$item->created_at}}</td>  
          <td>{{$item->fromdate." To ".$item->todate}}</td>
          <td>{{$item->comment}}</td>
          <td>
            <?php
                   if($item->status==3)
                    {
                    echo "Pending";
                    }
                    if($item->status==1)
                    {
                    echo "Confirmed";
                    }
                    if($item->status==2 and  $item->cancelby=='u')
                    {
                    echo "Canceled by user at " .$item->updated_at;
                    } 
                    if($item->status==2 and $item->cancelby=='a')
                    {
                    echo "Canceled by admin at " .$item->updated_at;
                    }
                    ?>
         </td>
          

          <td>
            
            <a href="{{url('confirm_booking',[$item->id])}}"><i><button class="btn btn-success btn-block">Confirm</button></i><br></a>
            <a href="{{url('cancel_booking',[$item->id])}}"><i><button class="btn btn-danger btn-block">Cancel</button></i></a>        
          </td>
        </tr>
        @php
        $cnt=$cnt+1;
    @endphp
    @endforeach
         

      </tbody>
    </table>
          </div>
         
          <!-- /.card-body -->
        </div>
        @if (session('update'))
        <div class="alert alert-success">
          {{session('update')}}
        </div>
         @endif

         @if (session('delete'))
         <div class="alert alert-danger">
            {{session('delete')}}
        </div>  
          @endif
        <!-- /.card -->
      </div>
    </div>
    
</section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('adminpanel/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('adminpanel/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('adminpanel/dist/js/demo.js')}}"></script>
</body>
</html>
@endsection
