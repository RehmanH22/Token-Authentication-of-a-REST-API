<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>

    </head>
    <body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/books/{{ $book->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $book->chaptertitle }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Description: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="description">{{ $book->chapter }}</textarea>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Price: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="price" value="{{ $book->price }}">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/books" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
    </div>
    </body>
</html>
