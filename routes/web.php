<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [BookController::class, 'index'])->name('books.index');
