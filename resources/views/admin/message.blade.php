@extends('layouts.layout')

@section('content')
        <tr>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Acion</th>
        </tr>
        @foreach($message as $value)
            <tr>
                <td> {{ $value->email }} </td>
                <td> {{ $value->subject }} </td>
                <td> {{ $value->message }} </td>
                <td><a href="{{$value->id}}/delete" class="btn btn-danger">Delete</a></td>
            </tr> 

        @endforeach 

@endsection