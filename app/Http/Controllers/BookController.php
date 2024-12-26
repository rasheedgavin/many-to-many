<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Book;


class BookController extends Controller
{
    public function index() {

        $books = Book::with('authors')->get();

        return view('books', compact('books'));
    }

}
