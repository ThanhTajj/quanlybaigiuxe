<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Book');
// });

Route::get('/', [BookController::class, 'index']);