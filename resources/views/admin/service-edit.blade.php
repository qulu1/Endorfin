@extends('layouts.layout')

@section('form')

<form action="/services/{{$service->id}}" method="POST">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label name='title'>Text:</label>
		<input type="text" class="form-control" name="text" value="{{$service->text}}">
	</div>
	<div>
		<select class="form-control" name="category" >
			<optgroup>
				@foreach($category as $key )
					<option value=" {{ $key->id }}"> {{ $key->category}}</option>
				@endforeach
  			</optgroup>			
		</select>
	</div>	
	<button type="submit" style="margin-top: 20px;" class="btn btn-success">Submit</button>
</form> 

@endsection