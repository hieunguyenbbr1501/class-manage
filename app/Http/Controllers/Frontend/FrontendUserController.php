<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendUserController extends Controller
{
    //
    public function index(){
        dd('hello');
    }
    public function register(Request $request){

    }
    public function loginAsStudent(Request $request){

        dd('hello');
    }
    public function loginAsTeacher(Request $request){

    }
    public function delete(){

    }
}
