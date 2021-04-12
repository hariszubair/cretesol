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
            <h1 class="m-0">Contact Us Form Submission</h1>
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
               <table id="category" class="table table-bordered" width="100%" style="font-size: 12px;text-align:center">
                    <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Email</th>
                            <th class="th-sm" >Number</th>
                            <th class="th-sm" style="width: 30%">Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $key=>$contact)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->number}}</td>
                        <td>{!! nl2br(e($contact->message)) !!}</td>
                        <td><a class="btn btn-danger" href="{{URL('delete_contact/'.$contact->id)}}" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
              </div>
        </div>
    </div>
</div>
</div>
        
@endsection()

@section('footer')
    <script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function() {

<script type="text/javascript">
	$( document ).ready(function() {

});

</script>
@endsection