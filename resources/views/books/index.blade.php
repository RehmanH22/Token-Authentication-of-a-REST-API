<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Dashboard</h1>

        @foreach($books as $book)
            <article>
                <h2>{{ $book->chaptertitle }}</h2>
                <h3> £{{$book->price }} </h3>
                <p>{{ $book->chapter }}</p>
            </article>
        @endforeach
    </body>
</html>
