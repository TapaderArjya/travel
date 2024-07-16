@extends('adminpanel.layouts.main')
@section('main-container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Package Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
              <li class="breadcrumb-item active">Package Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="packages_savedata" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Package</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Header</label>
                <input type="text" id="inputName" class="form-control" name="header">
              </div>

              <div class="form-group">
                <label for="email">Photo:</label>
                <img id="pimage" src="image/default.png" style="height: 100px;">
                <input type="file" class="form-control" id="email" placeholder="Browse Your Photo" name="file1" onchange="readPimage(this)" >
              </div>

              <div class="form-group">
                <label for="inputDescription">Short Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="shortdesc"></textarea>
              </div>

              <div class="form-group">
                <label for="inputDescription">Long Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="longdesc"></textarea>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" class="form-control" name="price">
              </div>

              <div class="form-group">
                <label for="discount">Discount</label>
                <input type="number" id="discount" class="form-control" name="discount">
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Add new package" class="btn btn-success float-right">
        </div>
      </div>
      </form>
      @if(session('success'))
      <div class="alert alert-success">
        <strong>Successfull!  </strong>{{session('success')}} 
      </div>
      @endif
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