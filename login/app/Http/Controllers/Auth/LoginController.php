<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{



    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function other()
    {

        return view('auth.other');
    }
    
    public function showLoginForm()
    {

        return view('auth.login');
    }

   public function login()
   {
    $credentials = $this->validate(request(), [
        'email'=> 'required|email',
        'password'=> 'required|'
    ]);

    //return $credentials;
    if(Auth::attempt($credentials))
    {
        return redirect()->route('dashboard');
    }
    return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput(request(['email']));

   }

   public function logout()
   {
    Session::flush();
    //Auth::logout();
    return redirect::to('/');
   }
}
