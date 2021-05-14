<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>

    </head>
    <nav class="w-full flex bg-gray-800 lg:px-8 px-4 py-4 text-white items-center relative justify-between md:justify-start">
        </div>
        <div class="flex text-xl font-bold tracking-wider space-x-2 md:mx-0 mx-auto">
            <span>StoryVerse</span>
        </div>
        <ul class="text-gray-300 flex md:space-x-2 p-2 md:px-0 md:space-y-0 space-y-1 md:ml-4 md:relative absolute top-full bg-gray-800 flex-col md:flex-row left-0 right-0">
            <li>
                <a href="{{ url('/') }}" class="font-semibold px-4 py-2 hover:bg-gray-700 hover:text-white rounded-lg block" >Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/books') }}" class="font-semibold px-4 py-2 bg-black rounded-lg block" >Books</a>
            </li>
        </ul>
    </nav>
    <body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Books</h1>
        @foreach($books as $book)
            <article class="mb-2">
                <h2 class="text-xl font-bold text-blue-500">{{ $book->chaptertitle }}</h2>
                <h3 class="inline-block align-middle text-gray-800"> £{{$book->price }} </h3>
                <p class="text-md text-gray-600">{{ $book->chapter }}</p>

                <hr class="mt-2">
            </article>
        @endforeach
        <div class ="Pagination">
            {{ $books->links() }}
        </div>
    </div>
    </body>
</html>
