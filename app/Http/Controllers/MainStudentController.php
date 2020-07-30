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

    public function studentPrikaz(Student $student){

        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query){
            return $query->where('student_id',1);
        })->get();

//        $studenti = Student::with('predmeti')->whereHas('predmeti',function($query){
//            return $query->where('predmet_id',1);
//        })->get();

        foreach ($predmeti as $predmet){
            echo $predmet->naziv .  '<br />';
        }
//        $student = Student::find(Auth::user()->id);
//        $student->predmeti()->attach(2);
//        dd($student);



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
