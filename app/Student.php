<?php

namespace App;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends User
{
    //
    protected $table = 'students';
    use Notifiable;
    public static function boot()
    {
        parent::boot();
//        static::addGlobalScope(function ($query) {
//            $query->where('is_student', 1);
//        });
    }

    protected $guard = 'student';

    protected $fillable = [
        'name', 'email', 'password','address','dob','code','gender'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses(){
        return $this->belongsToMany(Course::class,'students_courses');
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class,'students_subjects');
    }

}
