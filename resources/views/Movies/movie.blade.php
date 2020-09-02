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
    <div>
        <h3>Comments</h3>
        @foreach ($comments as $comment)
            <div class="alert alert-info">
                <p>{{$comment->content}}</p>
                <p>{{$comment->created_at}}</p>
            </div>
        @endforeach
    </div>
@endsection