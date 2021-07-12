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
          <h1 class="m-0">Projects</h1><button class="btn btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#add_category"> Add</button>
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
                <th class="th-sm">Category</th>
                <th class="th-sm">Image</th>
                <th class="th-sm" style="width: 200px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projects as $key=>$project)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->category}}</td>
                <td><img style="width:100px;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($project->compressed_image)}}"></td>
                <td>
                  <button class="btn btn-primary edit_project" name="{{$project->name}}" category="{{$project->category}}" id="{{$project->id}}"><i class="fas fa-edit"></i></button><a href="{{URL('admin/delete_project/'.$project->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
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
<form action="add_project" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Project Name</label>
              <input type="text" class="form-control" name="name" placeholder="Project name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Project Category</label>
              <select type="text" class="form-control" name="category" required>
                <option value="">Please select the following</option>
                <option value="Commercial">Commercial</option>
                <option value="Public">Public</option>
                <option value="Residential">Residential</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Project Image</label>
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
<form action="edit_project" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="edit_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group" style="display: none;">
              <label for="exampleInputEmail1">id</label>
              <input type="text" class="form-control" name="id" id="project_id" placeholder="Project name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Project Name</label>
              <input type="text" class="form-control" name="name" id="edit_name" placeholder="Project name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Project Category</label>
              <select type="text" class="form-control" name="category" id="edit_category" required>
                <option value="">Please select the following</option>
                <option value="Commercial">Commercial</option>
                <option value="Public">Public</option>
                <option value="Residential">Residential</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Project Image</label>
              <input type="file" class="form-control" name="project_image" id='edit_project_image' onchange="edit_image(this);">
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

    var fi = document.getElementById('edit_project_image');
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
          $('#edit_project_image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
          swal("File is not in jpg format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#edit_project_image').val(null);

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
  $(".edit_project").click(function() {
    $('#edit_name').val($(this).attr('name'))
    $('#edit_category').val($(this).attr('category'))
    $('#project_id').val($(this).attr('id'))
    $('#edit_project').modal('show')
  });
</script>
@endsection