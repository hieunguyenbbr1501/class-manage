<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\Term;
use App\Models\Year;
use App\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Session::all());
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        dd(Auth::user()->courses()->get());
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        if ($month > 10) {
            $scholar_year = Year::where('start', $year)->firstOrFail();
            $term = Term::where('order', 'first')->where('year', $scholar_year->name)->firstOrFail();
            $courses = $term->courses()->get();
            dd($courses);
        }

        $taken_courses = Auth::user()->courses()->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courseDetail($id)
    {
        $course = Course::findOrFail($id);
        if (Auth::user()->courses()->contains($course)) {
            dd(true);
        } else {

        }
        dd($course);
    }

    public function enrol($id)
    {

        $course = Course::findOrFail($id);
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        if (Auth::user()->courses->contains($course)) {
            redirect()->to(route('student.login'));
        }
        $subject = $course->subject()->first();
        if($subject->pre()->first()){
            $pre = $subject->pre()->first();
            if(!Auth::user()->subjects->contains($pre)){
                dd('not allowed');
            }
        }
        Auth::user()->courses()->attach($course);
        Auth::user()->subjects()->attach($subject);
        dd('success');
        $student = Student::where('email', Session::get('student_id'))->firstOrFail();
        $course = Course::find($id);
        //dd($course);
    }

    public function edit(Request $request)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        //
        $student_detail = Student::where('id', $id)->firstOrFail();
        dd($student_detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
//    public function edit(Student $student)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
