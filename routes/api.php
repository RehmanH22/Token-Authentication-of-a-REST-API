<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksAPIController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//--------------------------------------------------Public Routes
//Auth
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
//REST
Route::get('/books', [BooksAPIController::class, 'index']);
Route::get('/books/{id}', [BooksAPIController::class, 'show']);
Route::get('/books/search/{name}', [BooksAPIController::class, 'search']);

//--------------------------------------------------Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/books', [BooksAPIController::class, 'store']);
    Route::put('/books/{id}', [BooksAPIController::class, 'update']);
    Route::delete('/books/{id}', [BooksAPIController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
