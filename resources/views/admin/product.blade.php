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
          <h1 class="m-0">Products</h1><button class="btn btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#add_product"> Add</button>
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
          <table id="sub_category" class="table table-bordered" width="100%" style="font-size: 12px">
            <thead>
              <tr>
                <th style="width: 5%">#</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Slug</th>
                <th class="th-sm">Main Category</th>
                <th class="th-sm">Sub Category</th>
                <th class="th-sm">Third Category</th>
                <th class="th-sm">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($records as $key=>$record)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$record->name}}</td>
                <td>{{$record->slug}}</td>
                <td>{{$record->category ? $record->category->name : ''}}</td>
                <td>{{$record->sub_category ? $record->sub_category->name : ''}}</td>
                <td>{{$record->third_category ? $record->third_category->name : ''}}</td>


                <td>
                  <div style="display: flex;">
                    <a class="btn btn-primary" name="{{$record->name}}" href="{{url('admin/edit_product/'.$record->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{URL('admin/delete_product/'.$record->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                  </div>
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
<form action="add_product" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" name="name" id='product_name' required placeholder="Enter product name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Slug</label>
              <input type="text" class="form-control slug" name="slug" id='product_slug' required placeholder="Enter product name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category</label>
              <select type="text" class="form-control" name="category_id" id='category_id' required>
                <option value="">Please select the following</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sub Category</label>
              <select type="text" class="form-control" name="sub_category_id" id='sub_category_id'>
                <option value="">Please select an option</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Third Category Name</label>
              <select type="text" class="form-control" name="third_category_id" id="third_category_id" placeholder="Sub category name">
                <option value="">Please select an option</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Images</label>
              <input type="file" class="form-control" name="product_image[]" id='product_image' required onchange="add_image(this);" multiple>
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

@endsection()

@section('footer')
<script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    // category();
    $('#sub_category').DataTable();

  });

  function add_image(input) {

    var fi = document.getElementById('product_image');
    console.log(fi)
    // Check if any file is selected. 
    if (fi.files.length > 0) {
      for (var i = 0; i <= fi.files.length - 1; i++) {
        var name = fi.files.item(i).name;
        var fsize = fi.files.item(i).size;
        var file = Math.round((fsize / 1024));
        // The size of the file. 
        if (file >= 2048) {
          swal("File too Big, please select a file less than 2mb", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#product_image').val(null);

        } else if (name.substr(name.length - 4).toUpperCase() != '.JPG' && name.substr(name.length - 5).toUpperCase() != '.JPEG' && name.substr(name.length - 5).toUpperCase() != '.WEBP') {
          swal("File is not in correct format", "", "error", {
            buttons: false,
            timer: 1500,
          });
          $('#product_image').val(null);

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

  $(".edit_category").click(function() {
    $('#this_category_id').val($(this).attr('this_category_id'))
    $('#edit_name').val($(this).attr('name'))
    $('#edit_parent_category_id').val($(this).attr('parent_category_id'))
    $('#edit_category').modal('show')
  });

  $('#category_id').change(function() {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: './get_sub_category',
      data: {
        parent_id: $('#category_id').val()
      },
      type: 'POST',
      dataType: "json",
      success: function(data) {
        if (data.length != 0) {
          $('#sub_category_id').empty();
          $('#sub_category_id').attr('required', true);
          $('#third_category_id').empty();
          $('#sub_category_id').append('<option value="">Please select the following</option>');
          $.each(data, function(key, value) {
            $('#sub_category_id').append('<option value="' + value.id + '">' + value.name + '</option>');
          });
        } else {
          $('#sub_category_id').attr('required', false);
          $('#sub_category_id').empty();
          $('#third_category_id').empty();
        }
      }
    });
  });
  $('#sub_category_id').change(function() {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: './get_third_category',
      data: {
        parent_id: $('#sub_category_id').val()
      },
      type: 'POST',
      dataType: "json",
      success: function(data) {
        if (data.length != 0) {
          $('#third_category_id').attr('required', true);
          $('#third_category_id').empty();
          $('#third_category_id').append('<option value="">Please select the following</option>');
          $.each(data, function(key, value) {
            $('#third_category_id').append('<option value="' + value.id + '">' + value.name + '</option>');
          });
        } else {
          $('#third_category_id').attr('required', false);
          $('#third_category_id').empty();
        }
      }
    });
  });
  $('.slug').on('input', function(event) {
    this.value = this.value.replace(/[^a-z\-]+/g, "");
  });
</script>
@endsection