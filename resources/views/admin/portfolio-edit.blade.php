@extends('layouts.layout')

@section('form')

<form action="/portfolio/{{$portfolio->id}}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label name='title'>Title:</label>
		<input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
	</div>
	<div class="form-group">
		<label for="photo">Photo:</label>
		<input type="file" class="form-control" name="photo" value="{{$portfolio->photo}}">
	</div>	  
	<button type="submit" class="btn btn-success">Submit</button>
</form> 

@endsection