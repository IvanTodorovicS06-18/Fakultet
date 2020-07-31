<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Student extends Authenticatable
{
    protected $table = 'studenti';
    protected $guard = 'student';


//    public function pomocna(){
//
//        $student = Student::find(Auth::user()->id);
//
//        $studentov_id = $student->id;
//
//
//        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query) use($studentov_id){
//            return $query->where('student_id','=',$studentov_id);
//        })->get();
//    }

    public function predmeti(){
        return $this->belongsToMany(Predmet::class,'student_predmet')->withTimestamps();
    }
    public function predmet(){
        return $this->belongsToMany(Predmet::class,'Ispiti')->withPivot('ispitni_rok')->withTimestamps();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
