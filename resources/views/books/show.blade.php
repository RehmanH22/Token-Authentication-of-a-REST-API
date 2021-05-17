@extends('layouts.layout')

@section('content')
    <nav class="w-full flex bg-gray-800 lg:px-8 px-4 text-white items-center relative justify-between md:justify-start">
        </div>
        <div class="flex text-xl font-bold tracking-wider space-x-2 md:mx-0 mx-auto">
            <span>StoryVerse</span>
        </div>
        <ul class="text-gray-300 flex md:space-x-2 p-2 md:px-0 md:space-y-0 space-y-1 md:ml-4 md:relative absolute top-full bg-gray-800 flex-col md:flex-row left-0 right-0">
            <li>
                <a href="{{ url('/books') }}" class="font-semibold px-4 py-2 hover:bg-gray-700 hover:text-white rounded-lg block" >Return</a>
            </li>
            <li>
                <a href="/books/{{ $book->id }}/edit" class=" font-semibold px-4 py-2 hover:bg-gray-700 hover:text-white rounded-lg block">Edit Book</a>
            </li>
        </ul>
    </nav>
    <div class="py-12">
        <h1></h1>
    </div>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <p class="text-4xl font-bold text-blue-500">{{ $book->title }}</p>
                </div>
                <div></div>
                <div>
                    <h3 class="text-2xl float-right text-blue-400"> £{{$book->price }} </h3>
                </div>
            </div>
            <hr class="mt-2">
            <p class="text-md text-gray-600">{{ $book->description }}</p>
        </div>
@endsection
