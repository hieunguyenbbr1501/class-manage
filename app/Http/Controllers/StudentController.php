<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
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
        //dd(Auth::user()->courses()->get());
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        if ($month > 10) {
            $scholar_year = Year::where('start', $year)->firstOrFail();
            $term = Term::where('order', 'first')->where('year', $scholar_year->name)->firstOrFail();
            $courses = $term->courses()->get();
            //dd($courses);
        }
        $posts = Post::paginate(3);
        $taken_courses = Auth::user()->courses()->get();
        return view('trungduy.home',compact('term','courses','taken_courses','posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courseDetail($id)
    {
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        $course = Course::findOrFail($id);
        $lectures = $course->lectures()->get();
        if (Auth::user()->courses->contains($course)) {
//            dd($course->lectures()->get());
//            dd($course);
            return view('trungduy.subDetail',compact('course','lectures'));
        }
        else{
            return view('trungduy.enrol',compact('course'));
        }
    }

    public function enrol($id)
    {

        $course = Course::findOrFail($id);
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        if (Auth::user()->courses->contains($course)) {
            redirect()->to(route('student.dashboard'));
        }
        $subject = $course->subject()->first();
        if($subject->pre()->first() && $subject->pre()->first()->id !=0){
            $pre = $subject->pre()->first();
            if(!Auth::user()->subjects->contains($pre)){
                dd('not allowed');
            }
        }
        Auth::user()->courses()->attach($course);
        Auth::user()->subjects()->attach($subject);
        return redirect()->route('student.dashboard');
    }
    public function detail(){
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        return view('trungduy.UserDetail');
    }

    public function postDetail($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        return view('trungduy.postadmin',compact('post'));
    }

    public function search(Request $request){
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        $input = $request['query'];
        $courses = Course::where('code', 'LIKE', '%' . $input . '%')
            //->orWhere('another_column', 'LIKE', '%' . $input . '%')
            // etc
            ->get();
        return view('trungduy.searchSubjects',compact('courses'));
    }
    public function editProfile(Request $request)
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
    public function edit(Student $student)
    {
        //
        $Student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($Student);
        return view('trungduy.editProfile');
    }

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
