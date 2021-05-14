<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Token-based Authentication of a REST API</title>

</head>
<nav class="w-full flex bg-gray-800 lg:px-8 px-4 py-4 text-white items-center relative justify-between md:justify-start">
    </div>
    <div class="flex text-xl font-bold tracking-wider space-x-2 md:mx-0 mx-auto">
        <span>StoryVerse</span>
    </div>
    <ul class="text-gray-300 flex md:space-x-2 p-2 md:px-0 md:space-y-0 space-y-1 md:ml-4 md:relative absolute top-full bg-gray-800 flex-col md:flex-row left-0 right-0">
        <li>
            <a href="{{ url('/') }}" class="font-semibold px-4 py-2 bg-black rounded-lg block" >Dashboard</a>
        </li>
        <li>
            <a href="{{ url('/books') }}" class="font-semibold px-4 py-2 hover:bg-gray-700 hover:text-white rounded-lg block" >Books</a>
        </li>
    </ul>
</nav>
<body>
<div class="flex items-top min-h-screen bg-gray-50 dark:bg-gray-900">
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Dashboard</h1>
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Books</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{ \App\Models\Book::count() }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Staff</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{ \App\Models\User::count() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
