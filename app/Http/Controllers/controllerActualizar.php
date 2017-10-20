<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Habilidad;
use Illuminate\Support\Facades\Auth;
class controllerActualizar extends Controller
{
   public function update($id){
    	$User = User::findOrFail($id);

    	$User -> name = Input::get('name');
    	$User -> ocupacion = Input::get('ocupacion');
    	$User-> edad= Input::get('edad');
    	$User-> save();

    	return redirect('/home');
    }


       public function crear(){
    	$habilidad =  new Habilidad;

    	$habilidad -> habilidad = Input::get('habilidad');
    	$habilidad   ->   user_id = Auth::user()->id;
    	// return $habilidad;
    	$habilidad-> save();

    	return redirect('/home');
    }

        public function delete($id){
    	$fruta= Habilidad:: findOrFail($id);
    	$fruta->delete();

    	return redirect('/home');
    }

      public function edit($id){
    	$Habilidad = Habilidad::findOrFail($id);
    	return view('edit',['Habilidad'=>$Habilidad]);
    }

        public function actualizar($id){
    	$Habilidad = Habilidad::findOrFail($id);

    	$Habilidad -> habilidad = Input::get('habilidad');
    	$Habilidad-> save();

    	return redirect('/home');
    }

}
