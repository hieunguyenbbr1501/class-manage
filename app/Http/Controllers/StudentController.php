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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Prologue\Alerts\Facades\Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('trungduy.home', compact('term', 'courses', 'taken_courses', 'posts'));

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
            return view('trungduy.subDetail', compact('course', 'lectures'));
        } else {
            $subject = $course->subject;
            $taken = $student->courses()->get();
            $pre = $subject->pre;
            if($student->subjects->contains($pre) || $pre->id==0){
                return view('trungduy.enrol',compact('course','lectures'));
            }
            return view('trungduy.not_allowed',compact('course','lectures'));
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
        Auth::user()->courses()->attach($course);
        Auth::user()->subjects()->attach($subject);
        return redirect()->route('student.dashboard');
    }

    public function detail()
    {
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        return view('trungduy.UserDetail');
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        return view('trungduy.postadmin', compact('post'));
    }

    public function search(Request $request)
    {
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        $input = $request['query'];
        $courses = Course::where('code', 'LIKE', '%' . $input . '%')
            //->orWhere('another_column', 'LIKE', '%' . $input . '%')
            // etc
            ->get();
        return view('trungduy.searchSubjects', compact('courses'));
    }
    public function password(){
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        return view('trungduy.changePassword');
    }

    public function changePassword(Request $request){
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        //dd(Auth::user());
        if(Hash::check($request->old_password,$student->password,[]) && $request->new_password != $request->old_password && $request->new_2 == $request->new_password){
            $student->password = bcrypt($request->new_2);
            $student->save();
            Alert::success('Password changed')->flash();
            return redirect()->to(route('student.dashboard'));
        }
        Alert::error('An error occured, please make sure you have typed the password correctly')->flash();
        return redirect()->back();
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //dd($teacher);
        $student = Student::where('email', Session::get('email'))->firstOrFail();
        Auth::setUser($student);
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $file = $request->avatar;
        $file_name = time().rand(10,99);
        $file->move('img/avatar/',$file_name.$file->getClientOriginalName());
        $student->avatar = 'img/avatar/'.$file_name.$file->getClientOriginalName();
        $student->save();
        //$teacher->save();
        return redirect()->to(route('student.detail'));
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
