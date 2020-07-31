<?php

namespace App\Http\Controllers;

use App\Ispit;
use App\Predmet;
use App\StudentPredmet;
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

    public function prijavaIspita(Ispit $ispit){

        $student = Student::find(Auth::user()->id);


        $studentov_id = $student->id;

    //GLedaj da ubacis ovo u funckiju u model jer se kod ponavlja(greota)
        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query) use($studentov_id){
            return $query->where('student_id','=',$studentov_id);
        })->get();
        $ispit = Ispit::all();


        return view('studentPrikaz.prijava-ispita',['predmeti' => $predmeti,'ispit' => $ispit]);
    }

<<<<<<< HEAD
    public function studentPrijava(Predmet $predmet,Request $request,Ispit $ispit){

        $student = Student::find(Auth::user()->id);
        $student->predmet()->attach($request->predmet);
=======
    public function studentPrijava(Predmet $predmet,Request $request,Ispit $ispit,Student $student){
        $student = Student::find(Auth::user()->id);
        $student->predmet()->attach($request->predmet)->withPivot('ispitni_rok');
>>>>>>> 64c073fff096ddbfe424f924de4195e041c679c3

        return redirect('/student-profil');
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
