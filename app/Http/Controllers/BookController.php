<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
   
    public function index()
    {   

    
        $book = Book::first();
        $book
        ->addMedia('images/lordoftherings.jpg')
        ->toMediaCollection();

        $user->id = $book->user_id;

        return view('books');
    }
}