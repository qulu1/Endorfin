@extends('layouts.layout')

@section('content')
<div class="container">
	<tr>
		<th>Title</th>
		<th>Category</th> 
		<th class="text-center">Action</th>
	</tr>
	@foreach($service as $key)
	<tr>
		<td>{{$key->text}}</td>
		<td>{{$key->category->category}}</td>
		<td><a href="/services/{{$key->id}}/edit" class="btn btn-success">Update</a></td>
		<td><a href="/services/{{$key->id}}/delete" class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
</div>
@endsection

@section('form')

<form action="services" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
		<label name='title'>Title:</label>
		<input type="text" class="form-control" name="text">
	</div>
	<div>
		<select class="form-control" name="category">
			<optgroup>
				@foreach($category as $key )
					<option value=" {{ $key->id }}"> {{ $key->category}}</option>
				@endforeach
  			</optgroup>			
		</select>
	</div>	
	<div><button style="margin-top: 20px;" type="submit" class="btn btn-success">Submit</button></div>
</form>

@endsection

<script>
		


</script>
