<?php

namespace App\Http\Controllers;

use App\Predmet;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;

class MainStudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function prijavaIspita(){

        $student = Student::find(Auth::user()->id);


        $studentov_id = $student->id;

    //GLedaj da ubacis ovo u funckiju u model jer se kod ponavlja(greota)
        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query) use($studentov_id){
            return $query->where('student_id','=',$studentov_id);
        })->get();


        return view('studentPrikaz.prijava-ispita',['predmeti' => $predmeti]);
    }

    public function studentProfil(Student $student){

        $student = Student::find(Auth::user()->id);


        $studentov_id = $student->id;


        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query) use($studentov_id){
            return $query->where('student_id','=',$studentov_id);
        })->get();


//        $predmeti = Student::with('predmeti')->whereHas('predmeti',function($query){
//            return $query->where('predmet_id','=',2);
//        })->get();

        foreach ($predmeti as $predmet){
            echo $predmet->naziv .  '<br />';
        }

//        return view('studentPrikaz.prikaz');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('student');
    }
}
