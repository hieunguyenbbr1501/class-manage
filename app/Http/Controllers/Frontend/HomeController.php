<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        dd('hrllo');
    }
    public function postDetail($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('trungduy.postadmin',compact('post'));
    }
}
