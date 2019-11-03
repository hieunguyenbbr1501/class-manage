<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function index(Request $request){
        $form = collect($request->input('form'))->pluck('value', 'name');
        $options = Subject::query();
        if (! $form['major_id']) {
            return [];
        }

        // if a category has been selected, only show articles in that category
        if ($form['major_id']) {
            $options = $options->where('major_id', $form['major_id']);
        }



        return $options->paginate(10);
    }
    public function show($id){
        return Subject::find($id);
    }
}
