<?php

namespace App\Http\Controllers;

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


}
