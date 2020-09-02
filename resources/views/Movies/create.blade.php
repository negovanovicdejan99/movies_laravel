@extends('layouts.app')

@section('title', 'Add') 

@section('content')
    <h1>Add movie:</h1>
    <form  method="" action="">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control " id="title" name="title">
    </div>
    <div class="form-group">
      <label for="genre">Genre</label>
      <input class="form-control " id="genre" name="genre">
    </div>
    <div class="form-group">
      <label for="director">Director</label>
      <input class="form-control " id="director" name="director">
    </div>
    <div class="form-group">
      <label for="year_of_publishing">Year of publishing</label>
      <input class="form-control " id="year_of_publishing" name="year_of_publishing">
    </div>
    <div class="form-group">
      <label for="storyline">Storyline</label>
      <input class="form-control " id="storyline" name="storyline">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection