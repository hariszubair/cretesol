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
                    <h1 class="m-0">Edit Project</h1>
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
        <div class="card-body">
            {!! Form::open(['method'=>'PATCH','route'=>['admin.update_project', $project->id],'id'=>'update_form']) !!}

            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" class="form-control" name="name" id='project_name' required placeholder="Enter project name" value="{{$project->name}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Project Slug</label>
                    <input type="text" class="form-control" name="slug" id='project_slug' required placeholder="Enter project slug" value="{{$project->slug}}">
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
                    @foreach($project->images as $key=>$record)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{url($record->image)}}" target="_blank"><img style="width:24%;height:100px;overflow: hidden; object-fit: cover;" src="{{URL($record->image)}}"></a></td>
                        <td>
                            <form action="{{ url('/admin/project/delete_image', ['id' => $record->id]) }}" method="post">
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
<form action="{{url('admin/add_project_image')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group" style="display: none">
                            <label for="exampleInputEmail1">Project id</label>
                            <input type="text" class="form-control" name="project_id" id='project_id' required value="{{$project->id}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Project Images</label>
                            <input type="file" class="form-control" name="project_image[]" id='project_image' required onchange="add_image(this);" multiple>
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
    $(document).ready(function() {



    });

    function add_image(input) {

        var fi = document.getElementById('project_image');
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
                    $('#category_image').val(null);

                } else if (name.substr(name.length - 4).toUpperCase() != '.JPG') {
                    swal("File is not in correct format", "", "error", {
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
</script>
@endsection