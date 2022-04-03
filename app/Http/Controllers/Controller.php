<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Validator;
use Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     public function index() {
        $user = User::all();
        return view('welcome',compact(['user']));
    }
    
     function login(Request $req){

        return User::where('name', $req->input('name'))->get();

    }
}


