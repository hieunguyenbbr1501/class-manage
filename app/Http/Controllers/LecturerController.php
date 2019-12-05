<?php

namespace App\Http\Controllers;

use App\Lecturer;
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
        dd(Auth::user());
        //dd(Auth::user()->courses()->get());
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        if ($month > 10) {
            $scholar_year = Year::where('start', $year)->firstOrFail();
            $term = Term::where('order', 'first')->where('year', $scholar_year->name)->firstOrFail();
            $courses = $term->courses()->get();
            dd($courses);
        }
        dd('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
