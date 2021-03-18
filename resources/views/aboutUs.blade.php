@extends('layout') 

@section('title','About Us')

@section('content') 
    <h1>About Us:</h1>

    <ul>
        @foreach($about as $value)
            <li>{{$value['name']}}</li>
        @endforeach
    </ul>

@endsection
