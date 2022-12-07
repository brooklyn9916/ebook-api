<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/Authors', [AuthorController::class, 'index']);
Route::get('/Authors/{id}', [AuthorController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('authors', AuthorController::class)->except('create', 'edit', 'show', 'index');
});

Route::get('me', [AuthController::class, 'me']);

// Route::resource('books', BookController::class)->except(
//     ['create', 'edit']
// );

// Route::resource('authors', AuthorController::class)->except(
//     ['create', 'edit']
// );


