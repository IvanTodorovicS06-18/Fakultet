<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Profesor;
use App\Student;
use App\StudentskaSluzba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function addpage(){
        return view('Admin.add');
    }

    public function save(Request $request){

        $user = new Admin;

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/')->with('status','New user added');
    }

    public function pocetna(){

        return view('Admin.pocetna');
    }
    public function profaForma(){
        return view('Admin.addProfa');
    }
    public function ubaciprofu(Request $request){
        $user = new Profesor();

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/pocetna-strana')->with('status','New user added');
    }

    public function sluzbaForma(){
        return view('Admin.addClanaSluzbe');
    }
    public function ubaciClanaSluzbe(Request $request){
        $user = new StudentskaSluzba();

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/pocetna-strana')->with('status','New user added');
    }

    public function studentForma(){
        return view('Admin.addStudenta');
    }
    public function ubaciStudenta(Request $request){
        $user = new Student();

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->broj_indeksa = $request->input('broj_indeksa');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/pocetna-strana')->with('status','New user added');
    }
}
