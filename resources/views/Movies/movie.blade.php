@extends('layouts.app')

@section('title', 'Movie') 

@section('content')
    <div>
        <h1>{{$title}}</h1>
        <p>{{$genre}}</p>
        <p>{{$director}}</p>
        <p>{{$year_of_publishing}}</p>
        <p>{{$storyline}}</p>
    </div>
@endsection