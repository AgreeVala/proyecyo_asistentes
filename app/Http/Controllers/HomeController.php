<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
      $Habilidades= Habilidad::where("user_id","=",Auth::id())->get();
      // return $Habilidades;
        return view('home', ['Habilidades'=> $Habilidades]);
    }

        public function error()
    {     
      // return $Habilidades;
        return view('error');
    }
}
