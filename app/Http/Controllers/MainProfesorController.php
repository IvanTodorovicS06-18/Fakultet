<?php

namespace App\Http\Controllers;

use App\Ispit;
use App\Predmet;
use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainProfesorController extends Controller
{


    public function profesorPrikaz(){

        $profesor = Profesor::find(Auth::user()->id);
        $id = $profesor->id;


        $predmeti = Predmet::whereHas('profesor',function ($query) use($id){
            return $query->where('profesor_id',$id);
        })->get();

//        dd($profesor);

        foreach ($predmeti as $predmet){
            echo $predmet->naziv .  '<br />';
        }
//       return view('profesorPrikaz.prikaz');
    }

    public function prikzaprofinihispita(){
       $profesor = Profesor::find(Auth::user()->id);
       $profesor_id =$profesor->id;

        $predmeti = Predmet::with('profesor')->whereHas('profesor',function ($query) use($profesor_id){
            return $query->where('profesor_id','=',$profesor_id);
        })->get();




        return view('profesorPrikaz.profaispiti',['predmeti' => $predmeti]);
    }
    public function __construct()
    {
        $this->middleware('auth:profesor');
    }


    public function index()
    {
        return view('profesor');
    }
}
