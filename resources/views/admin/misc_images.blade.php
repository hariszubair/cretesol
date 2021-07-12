@extends('layouts.dashboard.master')
<link rel="stylesheet" href="{{asset('public/css/jquery.dataTables.min.css')}}">

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="display: flex;">
          <h1 class="m-0">Misc Images</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="card-body" style="width: 100%;overflow-y:scroll">
          <table id="category" class="table table-bordered" width="100%" style="font-size: 12px">
            <thead>
              <tr>
                <th style="width: 5%">#</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Image</th>
                <th class="th-sm" style="width: 100px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($images as $key=>$image)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$image->name}}</td>
                <td><img style="width:100px;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($image->image)}}"></td>
                <td>
                  <button class="btn btn-primary edit_images" id="{{$image->id}}"><i class="fas fa-edit"></i></button>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- edit Modal -->
<form action="edit_image" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="edit_images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group" style="display:none">
              <label for="exampleInputEmail1">Id</label>
              <input type="text" class="form-control" name="image_id" id='image_id'>
            </div>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" name="image" id='image' onchange="edit_image(this);" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </div>
  </div>

</form>
@endsection()

@section('footer')
<script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    // category();
    $('#category').DataTable();

  });

  function image(input) {

    var fi = document.getElementById('category_image');
    console.log(1)
    // Check if any file is selected. 
    if (fi.files.length > 0) {
      for (var i = 0; i <= fi.files.length - 1; i++) {
        var name = fi.files.item(i).name;
        var fsize = fi.files.item(i).size;
        var file = Math.round((fsize / 1024));
        // The size of the file. 
        if (file >= 7048) {
          swal("File too Big, please select a file less than 7mb", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#category_image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
          swal("File is not in jpg format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#category_image').val(null);

        } else {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              reader.readAsDataURL(input.files[0]);
            }
          }
        }
      }




    }
  }

  function edit_image(input) {

    var fi = document.getElementById('edit_category_image');
    console.log(1)
    // Check if any file is selected. 
    if (fi.files.length > 0) {
      for (var i = 0; i <= fi.files.length - 1; i++) {
        var name = fi.files.item(i).name;
        var fsize = fi.files.item(i).size;
        var file = Math.round((fsize / 1024));
        // The size of the file. 
        if (file >= 7048) {
          swal("File too Big, please select a file less than 7mb", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#edit_category_image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
          swal("File is not in jpg format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#edit_category_image').val(null);

        } else {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              reader.readAsDataURL(input.files[0]);
            }
          }
        }
      }




    }
  }
  $(".edit_images").click(function() {
    $('#image_id').val($(this).attr('id'))
    $('#edit_images').modal('show')
  });
  $('.slug').on('input', function(event) {
    this.value = this.value.replace(/[^a-z\-]+/g, "");
  });
</script>
@endsection