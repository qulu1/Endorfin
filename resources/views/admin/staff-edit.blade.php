@extends('layouts.layout')

@section('form')

	<form action="/staff/{{$staff->id}}" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	{{ method_field('PATCH') }}	

	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" name="name" value="{{$staff->name}}">
	  </div>
	  <div class="form-group">
	    <label for="surname">Surname:</label>
	    <input type="text" class="form-control" name="surname" value="{{$staff->surname}}">
	  </div>
	  <div class="form-group">
	    <label for="position">Position:</label>
	    <input type="text" class="form-control" name="position" value="{{$staff->position}}">
	  </div>
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" class="form-control" name="photo" value="{{$staff->photo}}">
	  </div>	  	  	  
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>  

@endsection