<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    //
    use Authenticatable;
    protected $redirectTo = '/student/dashboard';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return Auth::guard('student');
    }

    public function showLoginForm()
    {
        return view('student.login');
    }
    public function login(Request $request){
        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            //dd(true);
            return redirect(route('student.dashboard'));
        }
        return redirect(route('student.login.get'));
    }
}
