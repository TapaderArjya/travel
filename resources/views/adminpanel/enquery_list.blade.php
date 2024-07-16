@extends('adminpanel.layouts.main')
@section('main-container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enquery list</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
              <li class="breadcrumb-item active">Enquery List</li>
            </ol>
          </div>
        </div>
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Total Enquiries</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Posting date</th>
                  <th>Status</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>

          <tbody>
          @foreach ($user as $item)
          <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->email }}</td>
          <td>{{$item->mobile}}</td>
          <td>{{$item->subject}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->created_at}}</td>
          <td>
            <?php
            if($item->status==3)
            echo "Pending";
          else {
            echo "Has been read";
          }
            ?>
          </td>
          <td>
            <a href="{{url('read_enquery',[$item->id])}}"data-bs-toggle="" data-bs-target=""><i><button class="btn btn-warning btn-block">Read</button></i><br></a>
          </td>
          <td>
            <a href="{{url('cancel_booking',[$item->id])}}"><i><button class="btn btn-danger btn-block">Delete</button></i></a>               
          </td>
        </tr>
        <!-- The Modal -->
        <div class="modal fade" id="myModal5">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <p style="color: rgb(99, 156, 41);">Issues that an user have faced</p>
               <button type="button" class="btn" data-bs-dismiss="modal">X</button>
             </div>

             <!-- Modal body -->
          <div class="modal-body">
            <div class="modal-body">
                  <form action="{{url('read_enquery')}}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="name">Enquery From:</label>

                <p>{{$item->name}}</p>

                </div>
                <input type="hidden" name="email" id="email" value="{{$item->email}}">
                  <div class="mb-3">
                      <label for="comment">Enquery:</label>
                      <p style="color: red">{{$item->description}}</p>
                      
                    </div>
                <button type="submit" class="btn btn-primary">Read</button>
              </form> 
        
            </div>
           </div>

             
            </div>
          </div>
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
