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
            <h1 class="m-0">Count</h1>
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
                <form action="{{URL('admin/edit_count')}}" method="POST">
                @csrf
            <div class="form-group col-6">
                    <label for="exampleInputEmail1">Current Clients</label>
                    <input type="text" class="form-control slug" name="current_client" id='current_client' required value="{{$count->current_client}}">
            </div>
            <div class="form-group col-6">
                    <label for="exampleInputEmail1">YEARS OF EXPERIENCE</label>
                    <input type="text" class="form-control slug" name="yr_exp" id='yr_exp' required value="{{$count->yr_exp}}">
            </div>
            <div class="form-group col-6">
                    <label for="exampleInputEmail1">AWARDS WINNING</label>
                    <input type="text" class="form-control slug" name="awards" id='awards' required value="{{$count->awards}}">
            </div>
            <div class="form-group col-6">
                    <label for="exampleInputEmail1">OFFICES WORLDWIDE</label>
                    <input type="text" class="form-control slug" name="offices" id='offices' required value="{{$count->offices}}">
            </div>
            <div class="form-group col-6">
            <button type="Submmit">Submit</button>
            </div>
            </form>
              </div>
        </div>
    </div>
</div>
</div>
      @endsection()

@section('footer')
    <script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $('.slug').on('input',function(event) {
  this.value = this.value.replace(/[^\d]+/g, "");
    });
    </script>
</script>
@endsection