<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BooksController::class, 'index']);
Route::post('/books', [BooksController::class, 'store']);
Route::get('/books/create', [BooksController::class, 'create']);
Route::get('/books/{book}/edit', [BooksController::class, 'edit']);
Route::put('/books/{book}', [BooksController::class, 'update']);
Route::delete('/books/{book}', [BooksController::class, 'destroy']);
