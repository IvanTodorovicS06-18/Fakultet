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


        $predmeti_profesora = Predmet::whereHas('profesor',function ($query) use($id){
            return $query->where('profesor_id',$id);
        })->get();

        $predmeti = Predmet::with('studenti')->whereHas('studenti',function ($query) {
            return $query->where('student_id','=',1);
        })->get();

//         dd($predmeti );
//        dd($profesor);

//        foreach ($predmeti as $predmet){
//            echo $predmet->naziv .  '<br />';
//        }
       return view('profesorPrikaz.prikaz',['predmeti_profesora' => $predmeti_profesora, 'predmeti' => $predmeti]);
    }

    public function prikzaprofinihispita(){
        //isti kurac koji si vec pravio majmune hahahahhaahhahahahahaha
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
