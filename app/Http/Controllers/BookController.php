<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index()
   {
       if (request()->has('sort')) {
           $books = Book::orderBy(request()->query('sort'))->paginate(20);
       }
   }
}
