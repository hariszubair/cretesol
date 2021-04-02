@extends('layouts.dashboard.master')
  <link rel="stylesheet" href="{{asset('public/css/jquery.dataTables.min.css')}}">

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="content-wrapper" >
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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
			<div class="card-body">
               <table id="sub_category" class="table table-bordered" width="100%" style="font-size: 12px">
                    <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Main Category</th>
                            <th class="th-sm">Sub Category</th>
                            <th class="th-sm">Third Category</th>
                            <th class="th-sm" style="width: 40%">Image</th>
                            <th class="th-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($records as $key=>$record)
                     <tr>
                     	<td>{{$key+1}}</td>
                     	<td>{{$record->name}}</td>
                      <td>{{$record->category ? $record->category->name : ''}}</td>
                      <td>{{$record->sub_category ? $record->sub_category->name : ''}}</td>
                      <td>{{$record->third_category ? $record->third_category->name : ''}}</td>

                     	<td>
                        @foreach($record->images as $image)
                        <a href="{{URL($image->image)}}" target="_blank"><img style="width:24%;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($image->image)}}"></a>
                        @endforeach
                      </td>
                     	<td>
                        
                     		<a class="btn btn-primary" name="{{$record->name}}" href="{{url('admin/edit_product/'.$record->id)}}"><i class="fas fa-edit"></i></a>
                        <a href="{{URL('admin/delete_product/'.$record->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                    <label for="exampleInputEmail1">Category</label>
                    <select type="text" class="form-control" name="category_id" id='category_id' required>
                      <option>Please select the following</option>
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
                    <select type="text" class="form-control" name="third_category_id" id="third_category_id"  placeholder="Sub category name">
                      <option value="">Please select an option</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Third Category Image</label>
                    <input type="file" class="form-control" name="product_image[]" id='product_image' required onchange="image(this);" multiple>
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
        <form action="edit_third_category" method="post" enctype="multipart/form-data">
          @csrf
<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card-body">
          				<div class="form-group" style="display: none;">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" class="form-control" name="id" id="this_category_id"  placeholder="Category name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Parent Category</label>
                    <select type="text" class="form-control" name="category_id" id='edit_parent_category_id' required>
                      <option>Please select the following</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Category Name</label>
                    <input type="text" class="form-control" name="name" id="edit_name"  placeholder="Category name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Category Image</label>
                    <input type="file" class="form-control" name="category_image" id='edit_category_image' onchange="edit_image(this);">
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

    $(document).ready(function() {

<script type="text/javascript">
	$( document ).ready(function() {
    // category();
     $('#sub_category').DataTable();

});
	
	function image(input) {
            
            var fi = document.getElementById('product_image'); 
            console.log(fi)
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (var i = 0; i <= fi.files.length - 1; i++) { 
                var name=fi.files.item(i).name;
                var fsize = fi.files.item(i).size; 
                var file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 2048) { 
                  swal("File too Big, please select a file less than 2mb", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#product_image').val(null);

                }  else if(name.substr(name.length - 4).toUpperCase()!='.JPG'){
                  swal("File is not in jpg format", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#product_image').val(null);

                } else {

                    if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
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
                var name=fi.files.item(i).name;
                var fsize = fi.files.item(i).size; 
                var file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 2048) { 
                  swal("File too Big, please select a file less than 2mb", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#edit_category_image').val(null);

                }  else if(name.substr(name.length - 4).toUpperCase()!='.JPG'){
                  swal("File is not in jpg format", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#edit_category_image').val(null);

                } else {

                    if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                reader.readAsDataURL(input.files[0]);
            }
                } 
            } 
        } 




        }
    }
    $( ".edit_category" ).click(function() {
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
            url:'./get_sub_category',
            data:{parent_id:$('#category_id').val()},
            type:'POST',
             dataType: "json",
            success:function(data){
                $('#sub_category_id').empty();
                $('#third_category_id').empty();
                $('#sub_category_id').append('<option value="">Please select the following</option>'); 
                        $.each(data, function(key, value){
                          $('#sub_category_id').append('<option value="'+value.id+'">'+value.name+'</option>'); 
                          });
               
            }
          });
});
    $('#sub_category_id').change(function() {
  $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
            url:'./get_third_category',
            data:{parent_id:$('#sub_category_id').val()},
            type:'POST',
             dataType: "json",
            success:function(data){
                $('#third_category_id').empty();
                $('#third_category_id').append('<option value="">Please select the following</option>'); 
                        $.each(data, function(key, value){
                          $('#third_category_id').append('<option value="'+value.id+'">'+value.name+'</option>'); 
                          });
               
            }
          });
});
</script>
@endsection