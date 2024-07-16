@extends('adminpanel.layouts.main')
@section('main-container')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Packages list</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('cnt')}}">Home</a></li>
            <li class="breadcrumb-item active">Packages List</li>
          </ol>
        </div>
      </div>
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Packages list</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          @php
              $cnt=1;
          @endphp
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Id</th>
                <th>Header</th>
                <th>Image</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>

    <tbody>
     @foreach ($users as $item)
     <tr>
      <td>
        @php
            echo $cnt
        @endphp
      </td>
      <td>{{$item->id}}</td>
      <td>{{$item->header}}</td>
      <td>
        <img src="{{asset('photo/'.$item->image)}}" style="height: 40px; border-radius: 50%;">
      </td>
      <td>{{$item->short_desc}}</td>
      <td>{{$item->long_desc}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->discount}}</td>
      <td>
        <a href="packages_editdata/{{$item->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
      </td>

      <td>
        <a href="packages_deletedata/{{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>         
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
  
    </div><!-- /.container-fluid -->
  </section>

  
</div>
<!-- /.content-wrapper -->




</div>

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
