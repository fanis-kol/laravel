<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index() {
        $user = User::where('name')->get();
        return view('welcome',compact(['user']));
    }

    public function register(Request $request ){


       $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
           
       $user = new User();  
       $user ->name = request('name');
       $user ->email = request('email');
       $user ->password = request('password');
       $user ->save();


        return back();
    }

    
  
    function login(Request $req){
      $user = User::where('name', $req->input('name'))->get();
        
      if ($user->count() > 0) {
        return redirect('/');
      } else {
        return redirect('/login');
      }
    }
}


