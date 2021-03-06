<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message){
    	//Buscar el mensaje por id
    	//$message = Message::find($id);

    	//Mandar a llamar la vista
    	return view('messages.show',[
    		'message' => $message,
    	]);
    }

    public function create(CreateMessageRequest $request){

    	//dd($request->user());
    	//return 'Created!';

    	//Validaciones cortas (para largas crear request)
    	/*$this->validate($request, 
    		[
    			'message' => ['required', 'max:160']
    		],
    		[
    			'message.required' => 'Por favor, escribe tu mensaje.',
    			'message.max' => 'El mensaje no puede superar los 160 caracteres.',
    		]);*/


        $user = $request->user();

    	//Guarda en la BD	
    	$message = Message::create([
            'user_id' => $user->id,
    		'content' => $request->input('message'),
    		'image' => 'http://lorempixel.com/600/338?' .mt_rand(0, 1000),
    	]);

    	//dd($message);

    	return redirect('/messages/'.$message->id);
    }
}
