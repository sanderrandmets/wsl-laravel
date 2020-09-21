<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::query();
        if (request()->has('sort')) {
            $books->orderBy(request()->query('sort'));
        }

        return view('welcome', ['books' => $books->paginate(20)]);
    }
}
