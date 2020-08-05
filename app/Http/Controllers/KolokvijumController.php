<?php

namespace App\Http\Controllers;

use App\Kolokvijum;
use App\Predmet;
use App\Profesor;
use Illuminate\Http\Request;

class KolokvijumController extends Controller
{
    public function kolokvijumPrikaz(){

        $kolokvijumi = Kolokvijum::all();

        $predmeti = Predmet::has('kolokvijum')->get();

//        $predmeti_profesora = Kolokvijum::whereHas('predmeti',function ($query){
//            return $query->where('predmet_id',1);
//        })->get();
//        dd($predmeti_profesora);


//     dd(  $kolokvijumi);
        return view('kolokvijum.kolokvijum',['kolokvijumi' => $kolokvijumi,'predmeti' => $predmeti]);
    }
}
