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
}
