<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureRequest;
use App\Lecturer;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Term;
use App\Models\Year;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use AuthenticatesUsers;
    protected $redirectTo = '/lecturer/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function guard()
    {
        return Auth::guard('lecturer');
    }

    public function index()
    {
        //
        $Lecturer = Lecturer::where('email', Session::get('lecturer_email'))->firstOrFail();
        Auth::setUser($Lecturer);
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        if ($month > 10) {
            $scholar_year = Year::where('start', $year)->firstOrFail();
            $term = Term::where('order', 'first')->where('year', $scholar_year->name)->firstOrFail();
            $courses = $term->courses()->get();
        }
        $taken_courses = Auth::user()->courses()->get();
        return view('lecturer.home',compact('taken_courses','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function courseDetail($id){
        $Lecturer = Lecturer::where('email', Session::get('lecturer_email'))->firstOrFail();
        Auth::setUser($Lecturer);
        $course = Course::findOrFail($id);
        $lectures = $course->lectures()->get();
        $taken_courses = Auth::user()->courses()->get();

        if (Auth::user()->courses->contains($course)) {
//            dd($course->lectures()->get());
//            dd($course);
            return view('lecturer.subDetail',compact('course','lectures','taken_courses'));
        }
        else{
            return view('lecturer.subDetail',compact('course','taken_courses','lectures'));
        }
    }

    public function uploadLecture(Request $request){
        $file = $request->file;
        $file_name = time().rand(10,99);
        $file->move('lectures/'.$request->lecture,$file_name.$file->getClientOriginalName());
        $lecture = Lecture::where('id', $request->lecture)->firstOrFail();
        $lecture->path = 'lectures'.'/'.$lecture->id.'/'.$file_name.$file->getClientOriginalName();
        $lecture->save();
        return redirect(route('lecturer.dashboard'));
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function detail(){
        $Lecturer = Lecturer::where('email', Session::get('lecturer_email'))->firstOrFail();
        Auth::setUser($Lecturer);
        return view('trungduy.UserDetail');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturer  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturer  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $teacher)
    {
        //
    }
}
