<?php

namespace App\Http\Controllers;

use App\Predmet;
use App\Profesor;
use App\Student;
use Illuminate\Http\Request;

class MainStudentskaSluzbaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:studentska_sluzba');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('StudentskaSluzba');
    }

    public function pocetnaStrana(){
        return view('studentskaSluzbaPrikaz.pocetnaStrana');
    }

    public function vidiStudente(Student $student){
        $student = Student::all();
        return view('studentskaSluzbaPrikaz.studenti',['student' => $student]);
    }

    public function vidiProfesore(Profesor $profesor){
        $profesor = Profesor::all();
        return view('studentskaSluzbaPrikaz.profesori',['profesor' => $profesor]);
    }

    public function vidiPredmete(Predmet $predmet){
        $predmet = Predmet::all();
        return view('studentskaSluzbaPrikaz.predmeti',['predmet' => $predmet]);
    }
}
