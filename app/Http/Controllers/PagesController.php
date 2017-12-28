<?php

namespace App\Http\Controllers;
use App\Mensages;
use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function home()
    {
    	/*$messages = [
            [
                'id' => 1,
                'content' => 'Este es el primer mensaje!',
                'image' => 'http://lorempixel.com/600/338?1',
            ],
            [
                'id' => 2,
                'content' => 'Este es el segundo mensaje!',
                'image' => 'http://lorempixel.com/600/338?2',
            ],
            [
                'id' => 3,
                'content' => 'Este es el tercer mensaje!',
                'image' => 'http://lorempixel.com/600/338?4',
            ],
            [
                'id' => 4,
                'content' => 'Este es el ultimo mensaje!',
                'image' => 'http://lorempixel.com/600/338?5',
            ]
            

		];*/

       // $messages = [];

        //trae todos los mensajes
        $messages = Mensages::all();

        //dd($messages);

	    return view('welcome', [
	    	'messages' => $messages,
	    ]);
    }

    public function about(){
    	//return 'Acerca de nosotros!';
     	return view('about');
    }
}
