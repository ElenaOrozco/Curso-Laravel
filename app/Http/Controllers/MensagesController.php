<?php

namespace App\Http\Controllers;

use App\Mensages;

use Illuminate\Http\Request;

class MensagesController extends Controller
{
    public function show($id){
    	//Buscar
    	$message =Mensages::find($id);


    	//MAndar view
    	return view('messages.show',[
    		'message' => $message,
    	]);

    }
}
