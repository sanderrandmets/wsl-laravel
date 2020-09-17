<?php

use App\Book;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

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
    //$books = App\Book::paginate(20);
    //$books = Book::where('language', 'Swahili')->paginate(15);

    if (request()->has('sort')) {
        $books = Book::orderBy(request()->query('sort'))->paginate(20);
    } else {
        $books = Book::paginate(20);
    }
    //return view('welcome');
    //return DB::table('books')->where('language', 'Swahili')->get();
    //$books = Book::where('language', 'Swahili')->get();

    return view('welcome', ['books' => $books]);
});
