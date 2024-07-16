@extends('adminpanel.layouts.main')
@section('main-container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About

            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
              <li class="breadcrumb-item active">Issue Reply</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          <form action="{{url('isuue_send')}}" method="GEt" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
              <h3 class="card-title">Admin Reply</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="id" value="{{$res->id}}">
              
              <div class="form-group">
                <label for="inputName">User Issue:</label>
                <input type="text" id="description" class="form-control" name="description" value="{{$res->description}}">
              </div>

              <div class="form-group">
                <label for="inputName">Admin Reply:</label>
                <input type="text" id="reply" class="form-control" name="reply">
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
