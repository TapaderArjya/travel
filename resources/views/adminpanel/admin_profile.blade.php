@extends('adminpanel.layouts.main')
@section('main-container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Profile

            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
              <li class="breadcrumb-item active">Admin Profile Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          <form action="{{url('adminedit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
              <h3 class="card-title">Edit Profile</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
          <center>
            <img src="{{asset('photo/'.$user->image)}}" alt="" style="height: 200px; border-radius: 50%;">
            </center>
              

              <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="id" value="{{$user->id}}">
              <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="image" value="{{$user->image}}">
              <div class="form-group">
                <label for="inputName">Name:</label>
                <input type="text" id="inputName" class="form-control" name="name" value="{{$user->name}}">
              </div>

              <div class="form-group">
                <label for="inputName">Username:</label>
                <input type="text" id="username" class="form-control" name="username" value="{{$user->username}}">
              </div>

              <div class="form-group">
                <label for="inputName">Email:</label>
                <input type="email" id="email" class="form-control" name="email" value="{{$user->email}}">
              </div>

              <div class="form-group">
                <label for="inputName">Mobile:</label>
                <input type="text" id="mobile" class="form-control" name="mobile" value="{{$user->mobile}}">
              </div>

              <div class="form-group">
                <label for="inputName">Password:</label>
                <input type="password" id="password" class="form-control" name="password" value="{{$user->password}}">
              </div>


              <input type="hidden" name="oldfile" value="">

              <div class="form-group">
                <label for="email">Photo:</label>
                <img id="pimage" src="" style="height: 100px;">
                <input type="file" class="form-control" id="imagen" placeholder="Browse Your Photo"  name="imagen" onchange="readPimage(this)" >
              </div>

              <div class="row">
                <div class="col-12">
                  <a href="#" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </div>
              </div>
              
          </div>
          </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
            <!-- /.card-body -->
          </div>
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
