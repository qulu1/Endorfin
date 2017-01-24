@extends('layouts.layout')

@section('content')
	<tr>
		<th>Name</th>
		<th>Surname</th> 
		<th>Position</th> 
		<th>Photo</th> 
		<th>Action</th>		
	</tr>
	@foreach($staff as $key)
	<tr>
		<td>{{$key->name}}</td>
		<td>{{$key->surname}}</td>
		<td>{{$key->position}}</td>
		<td><img style="width: 100px;height: 100px;" src="images/{{ $key->photo }}"></td> 
		<td><a href="/staff/{{$key->id}}/edit" class="btn btn-success">Update</a></td>
		<td><a href="/staff/{{$key->id}}/delete" class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
@endsection
<br>
@section('form')
		
	<hr>	
	<form action="" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}	
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" name="name">
	  </div>
	  <div class="form-group">
	    <label for="surname">Surname:</label>
	    <input type="text" class="form-control" name="surname">
	  </div>
	  <div class="form-group">
	    <label for="position">Position:</label>
	    <input type="text" class="form-control" name="position">
	  </div>
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" class="form-control" name="photo">
	  </div>	  	  	  
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>  


@endsection