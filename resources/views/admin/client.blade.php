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
          <h1 class="m-0">Clients</h1><button class="btn btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#add_client"> Add</button>
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
                <th class="th-sm" style="width: 200px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients as $key=>$client)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$client->name}}</td>
                <td><img style="width:100px;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($client->compressed_image)}}"></td>
                <td>
                  <button class="btn btn-primary edit_client" name="{{$client->name}}" id="{{$client->id}}"><i class="fas fa-edit"></i></button><a href="{{URL('admin/delete_client/'.$client->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
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
<!-- Modal -->
<form action="add_client" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Client Name</label>
              <input type="text" class="form-control" name="name" placeholder="Client name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Client Image</label>
              <input type="file" class="form-control" name="image" id='image' required onchange="image(this);">
            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- edit Modal -->
<form action="edit_client" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="edit_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group" style="display: none;">
              <label for="exampleInputEmail1">id</label>
              <input type="text" class="form-control" name="id" id="client_id" placeholder="Client name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Client Name</label>
              <input type="text" class="form-control" name="name" id="edit_name" placeholder="Client name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Client Image</label>
              <input type="file" class="form-control" name="client_image" id='edit_client_image' onchange="edit_image(this);">
            </div>

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

    var fi = document.getElementById('image');
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
          $('#image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
          swal("File is not in jpg format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#image').val(null);

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

    var fi = document.getElementById('edit_client_image');
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
          $('#edit_client_image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
          swal("File is not in jpg format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#edit_client_image').val(null);

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
  $(".edit_client").click(function() {
    $('#edit_name').val($(this).attr('name'))
    $('#client_id').val($(this).attr('id'))
    $('#edit_client').modal('show')
  });
</script>
@endsection