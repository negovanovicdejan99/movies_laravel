@extends('layouts.app')

@section('title', 'Add') 

@section('content')
    <h1>Add movie:</h1>
    <form  method="POST" action="/movies">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control @error('title') is-invalid @enderror" id="title" name="title">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="genre">Genre</label>
      <input class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre">
      @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="director">Director</label>
      <input class="form-control @error('director') is-invalid @enderror" id="director" name="director">
      @error('director')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="year_of_publishing">Year of publishing</label>
      <input class="form-control @error('year_of_publishing') is-invalid @enderror" id="year_of_publishing" name="year_of_publishing">
      @error('year_of_publishing')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="storyline">Storyline</label>
      <textarea class="form-control @error('storyline') is-invalid @enderror" id="storyline" rows="5" name="storyline"></textarea>
      @error('storyline')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection