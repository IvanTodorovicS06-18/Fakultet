<?php

namespace App\Http\Controllers;

use App\Predmet;
use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainProfesorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function profesorPrikaz(){

        $profesor = Profesor::find(Auth::user()->id);
        $id = $profesor->id;


<<<<<<< HEAD
       
=======
        $predmeti = Predmet::whereHas('profesor',function ($query) use($id){
            return $query->where('profesor_id',$id);
>>>>>>> dcee20ead8d373539f851764e65ac42d326caeb8
        })->get();

//        dd($profesor);

        foreach ($predmeti as $predmet){
            echo $predmet->naziv .  '<br />';
        }
//       return view('profesorPrikaz.prikaz');
    }

    public function __construct()
    {
        $this->middleware('auth:profesor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profesor');
    }
}
