
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
            <h1 class="m-0">Users</h1><button class="btn btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#add_user"> Add</button>
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
       
			<div class="card-body">
               <table id="category" class="table table-bordered" width="100%" style="font-size: 12px">
                    <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm" >Email</th>
                            <th class="th-sm" style="width: 200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($users as $key=>$user)
                     <tr>
                     	<td>{{$key+1}}</td>
                     	<td>{{$user->name}}</td>
                     	<td>{{$user->email}}</td>
                     	<td>
                     		<button class="btn btn-primary edit_user" name="{{$user->name}}" email="{{$user->email}}" id="{{$user->id}}"><i class="fas fa-edit"></i></button>
                             @if($user->id != Auth::user()->id)
                             <a href="{{URL('admin/delete_user/'.$user->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                     	    @endif
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
        <form action="add_user" method="post" enctype="multipart/form-data">
          @csrf
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                   

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                </div>
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
        <form action="edit_user" method="post" enctype="multipart/form-data">
          @csrf
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          		
          <div class="form-group row">
          <input id="edit_id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="name" autofocus style="display:none">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="edit_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="edit_email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="edit_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
     $('#category').DataTable();

});
	
	function image(input) {
            
            var fi = document.getElementById('image'); 
            console.log(1)
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (var i = 0; i <= fi.files.length - 1; i++) { 
                var name=fi.files.item(i).name;
                var fsize = fi.files.item(i).size; 
                var file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 7048) { 
                  swal("File too Big, please select a file less than 7mb", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#image').val(null);

                }  else if(name.substr(name.length - 4).toUpperCase()!='.JPG'){
                  swal("File is not in jpg format", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#image').val(null);

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
            
            var fi = document.getElementById('edit_client_image'); 
            console.log(1)
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (var i = 0; i <= fi.files.length - 1; i++) { 
                var name=fi.files.item(i).name;
                var fsize = fi.files.item(i).size; 
                var file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 7048) { 
                  swal("File too Big, please select a file less than 7mb", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#edit_client_image').val(null);

                }  else if(name.substr(name.length - 4).toUpperCase()!='.JPG'){
                  swal("File is not in jpg format", "", "error", {
                buttons: false,
                timer: 1500,
                });  
                    $('#edit_client_image').val(null);

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
    $( ".edit_user" ).click(function() {
    	$('#edit_name').val($(this).attr('name'))
    	$('#edit_email').val($(this).attr('email'))
    	$('#edit_id').val($(this).attr('id'))
    	$('#edit_user').modal('show')
});

</script>
@endsection