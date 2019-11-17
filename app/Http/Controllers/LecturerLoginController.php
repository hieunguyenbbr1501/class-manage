<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LecturerLoginController extends Controller
{
    //
    use AuthenticatesUsers;
    protected $redirectTo = '/lecturer/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return Auth::guard('lectuer');
    }

    public function showLoginForm()
    {
        return view('lecturer.login');
    }
    public function login(Request $request){
        if (Auth::guard('lecturer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            //dd(true);
            return redirect(route('lecturer.dashboard'));
        }
        return redirect(route('lecturer.login.get'));
    }
}
