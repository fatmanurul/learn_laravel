@extends('layouts.main')

@section('container')
    <h1>best-sellers</h1>
    <h1>{{$name}}</h1>
    <p>{{$email}}</p>
    <img src="img/{{$img}}" alt="{{$name}}" width="200" class="img-thumbnail rounded-circle">
    @endsection