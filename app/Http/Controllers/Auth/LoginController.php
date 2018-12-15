<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only'=>'showLoginForm']);
    }

    function showLoginForm()
    {
        return view('auth.login');
    }

   function login()
   {
    $credencials = $this->validate(request(), [
        'email' => 'email|required|string',
        'password' => 'required|string'
    ]);
       if(Auth::attempt($credencials)){
           return redirect()->route('index');
       }
       else{
           return back()
               ->withErrors(['email'=> trans('auth.failed')])
               ->withInput(request(['email']));
       }

   }
   function logout(){
        Auth::logout();
        return redirect()->route('loginView');
   }


}
