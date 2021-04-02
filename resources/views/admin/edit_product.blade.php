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
            <h1 class="m-0">Edit Products</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card-body">
        {!! Form::open(['method'=>'PATCH','route'=>['admin.update_product', $product->id],'id'=>'update_form']) !!}
                 
                        @csrf
        <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="name" id='product_name' required placeholder="Enter product name" value="{{$product->name}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Category</label>
                    <select type="text" class="form-control" name="category_id" id='category_id' required>
                      <option>Please select the following</option>
                      @foreach($categories as $category)
                      <option {{$product->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-md-6">
                    <label for="exampleInputEmail1">Sub Category</label>
                    <select type="text" class="form-control" name="sub_category_id" id='sub_category_id'>
                      <option val="">Please select an option</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Third Category Name</label>
                    <select type="text" class="form-control" name="third_category_id" id="third_category_id"  placeholder="Sub category name">
                      <option val="">Please select an option</option>
                    </select>
                  </div>
                   <div class="form-group col-md-12" style="text-align:right">
                    <label for="exampleInputEmail1"></label>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  </div>
                </form>
                  <div style="display: flex;padding-bottom: 10px">
            <h2 class="m-0">Images</h2><button class="btn btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#add_product"> Add</button>
            </div>
                  <table id="sub_category" class="table table-bordered" width="100%" style="font-size: 12px">
                    <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                            <th class="th-sm">Image</th>
                            <th class="th-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($product->images as $key=>$record)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{url($record->image)}}" target="_blank"><img style="width:24%;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($record->image)}}"></a></td>
                        <td>
                          <form action="{{ url('/admin/product/delete_image', ['id' => $record->id]) }}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                          <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
    </div>
  </div>
  <!-- Modal -->
        <form action="{{url('admin/add_image')}}" method="post" enctype="multipart/form-data">
          @csrf
<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card-body">
                  <div class="form-group" style="display: none">
                    <label for="exampleInputEmail1">Product id</label>
                    <input type="text" class="form-control" name="product_id" id='product_id' required value="{{$product->id}}">
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
  @endsection


  @section('footer')

<script type="text/javascript">
  
    $('#category_id').change(function() {
    sub_cat($('#category_id').val());
});
    function sub_cat(parent_id){
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
            url:'../get_sub_category',
            data:{parent_id:parent_id},
            type:'POST',
             dataType: "json",
            success:function(data){
                $('#sub_category_id').empty();
                $('#third_category_id').empty();
                $('#sub_category_id').append('<option value="">Please select the following</option>'); 
                        $.each(data, function(key, value){
                            
                          $('#sub_category_id').append('<option value="'+value.id+'">'+value.name+'</option>'); 
                          });
                        var sub_cat_id='<?php echo $product->sub_category_id;   ?>';
                        console.log(sub_cat_id)
                        if(sub_cat_id != ''){
                       $('#sub_category_id').val(sub_cat_id).change()
                        }
               
            }
          });
    }
    $('#sub_category_id').change(function() {
    third_cat($('#sub_category_id').val());
});
    function third_cat(parent_id){
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
            url:'../get_third_category',
            data:{parent_id:parent_id},
            type:'POST',
             dataType: "json",
            success:function(data){
                $('#third_category_id').empty();
                $('#third_category_id').append('<option value="">Please select the following</option>'); 
                        $.each(data, function(key, value){
                          $('#third_category_id').append('<option value="'+value.id+'">'+value.name+'</option>'); 
                          });
                        
                        var third_cat_id='<?php echo $product->third_category_id;   ?>';
                        if(third_cat_id != ''){
                       $('#third_category_id').val(third_cat_id)
                        }
               
            }
          });
    }
    $( document ).ready(function() {
    var cat='<?php echo $product->category_id;   ?>';
     var sub_cat_id='<?php echo $product->sub_category_id;   ?>';
     var third_cat_id='<?php echo $product->third_category_id;   ?>';
    if(cat != ''){
      sub_cat(cat);
    }
   

});
</script>
  @endsection