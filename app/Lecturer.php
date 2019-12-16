<?php

namespace App;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lecturer extends \Illuminate\Foundation\Auth\User
{
    //
    use Notifiable;
    protected $guard = 'lecturer';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function courses(){
        return $this->belongsToMany(Course::class,'lecturers_courses');
    }
}
