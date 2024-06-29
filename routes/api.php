<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::apiResource('books', BookController::class);

// Contoh route API
Route::get('/', function () {
    return response()->json(['message' => 'API Berjalan']);
});
Route::put('/books/{id}', [BookController::class, 'update']);
