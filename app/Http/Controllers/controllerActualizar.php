<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
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
}
