@extends('layouts.layout')

@section('form')

@if(Session::has('message'))
	<div class="alert-box success" style="font-size:16px; color: #e60000">
	    {{ Session::get('message') }}
	</div>
@endif

{{-- @if (Auth::user()->type->id == 1) --}}
	<form action="/admins/{{$users->id}}" method="POST">
	{!! csrf_field() !!}
	{{ method_field('PATCH') }}	

		<div class="form-group">
			<label name='title'>Name:</label>
			<input type="text" class="form-control" name="name" value="{{$users->name}}">
		</div>
		<div class="form-group">
			<label for="photo">Email:</label>
			<input type="text" class="form-control" name="email" value="{{$users->email}}">
		</div>	  
		<div class="form-group">
			<label for="photo">Old Password:</label>
			<input type="password" class="form-control" name="password">
		</div>	
		<div class="form-group">
			<label for="photo">New Password:</label>
			<input type="password" class="form-control" name="newpass">
		</div>	  	
		<button type="submit" class="btn btn-success">Submit</button>
	</form> 

{{-- @else
	<form action="/admins/{{Auth::user()->id}}" method="POST">
	{!! csrf_field() !!}
	{{ method_field('PATCH') }}	

		<div class="form-group">
			<label name='title'>Name:</label>
			<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
		</div>
		<div class="form-group">
			<label for="photo">Email:</label>
			<input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
		</div>	  
		<div class="form-group">
			<label for="photo">Old Password:</label>
			<input type="password" class="form-control" name="password">
		</div>	
		<div class="form-group">
			<label for="photo">New Password:</label>
			<input type="password" class="form-control" name="newpass">
		</div>	  	
		<button type="submit" class="btn btn-success">Submit</button>
	</form>  --}}

{{-- @endif --}}

@endsection