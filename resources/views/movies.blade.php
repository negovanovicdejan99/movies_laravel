@extends('layouts.app')

@section('title', 'Movies') 

@section('content')
        <h1>My movies:</h1>
        @foreach ($movies as $movie)
            <a href="">{{$movie->title}}    </a>
            <p>{{$movie->storyline}}</p>
        @endforeach
@endsection