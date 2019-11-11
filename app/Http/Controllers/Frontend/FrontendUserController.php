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
    public function loginAsStudent(Request $request){
        if(Auth::attempt($request->all())){
            dd('hello');
        }
        else dd('false');
    }
    public function loginAsTeacher(Request $request){

    }
    public function delete(){

    }
}
