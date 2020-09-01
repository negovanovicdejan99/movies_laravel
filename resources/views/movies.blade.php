<html>
    <head>
        <title>Movies</title>
    </head>
    <body>
        @foreach ($movies as $movie)
            <a href="">{{$movie->title}}</a>
            <p>{{$movie->storyline}}</p>
        @endforeach
    </body>
</html>