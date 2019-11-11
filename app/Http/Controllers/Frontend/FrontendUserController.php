<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendUserController extends Controller
{
    //
    public function index(){
        dd('hello');
    }
    public function register(Request $request){

    }
    public function login(Request $request){
        //dd($request);
        if(Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password'],
            'is_student' => 1,
        ])){

            dd('hello');
        }
        else if(
            Auth::attempt([
                'email' => $request['email'],
                'password' => $request['password'],
                'is_lecturer' => 1
            ])){
            dd('hello lecturer');
        }
        else{
            dd('false');
        }
    }
    public function loginAsTeacher(Request $request){

    }
    public function delete(){

    }
}
