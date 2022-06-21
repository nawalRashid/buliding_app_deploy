<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class CustomAuthController extends Controller
{
    
    
    public function login()
    {
      $user = User::first();
       Auth::login($user);

       return redirect('/services');
    }

    
    

     public function CustomLogin($id)
    {
    //   $user = User::find($id);
    //   if(! $user)
    // {
    //     Auth::logout();
    //     return redirect('login');
    // }

     $user = User::findOrFail($id);


       Auth::login($user);

       return redirect('/services');
    
}
}
