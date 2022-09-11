<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Book;

class BookController extends Controller
{
   
    public function index()
    {
        $book = Book::first();
        // $book
        // ->addMedia('images/lordoftherings.jpg')
        // ->toMediaCollection();
        // dd($book->getMedia());
        return view('books');
    }
}