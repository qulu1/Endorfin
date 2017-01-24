@extends('layouts.layout')

@section('content')
	<tr>
		<th>Title</th>
		<th>Photo</th> 
		<th class="text-center">Action</th>
	</tr>
	@foreach($portfolio as $key)
	<tr>
		<td>{{$key->title}}</td>
		<td><img style="width: 100px;height: 100px;" src="images/{{ $key->photo }}"></td> 
		<td><a href="/portfolio/{{$key->id}}/edit" class="btn btn-success">Update</a></td>
		<td><a href="/portfolio/{{$key->id}}/delete" class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
@endsection

@section('form')
	<hr>	
	<form action="/portfolio" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="form-group">
			<label name='title'>Title:</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label for="photo">Photo:</label>
			<input type="file" class="form-control" name="photo">
		</div>	  
		<button type="submit" class="btn btn-success">Submit</button>
	</form>  


@endsection