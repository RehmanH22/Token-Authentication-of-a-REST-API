<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {

        $books = Book::paginate(5);

        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Book::create($validatedAttributes);

        return redirect('/books');
    }

    public function edit(Book $book) {

        return view('books.edit', ['book' => $book]);
    }

    public function update(Book $book)
    {
        //dd(request()->all());

        $validatedAttributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $book->update($validatedAttributes);

        return redirect('/books');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }

}
