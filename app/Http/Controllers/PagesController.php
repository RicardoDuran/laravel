<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('example', ['only' => ['home']]);
    }
    public function home()
    {
    	return view('home');
    }
    public function saludo($nombre = 'Invitado')
    {
    	$consolas = [
		"Play Station 4",
		"Xbox One",
		"Wii U"
	];
    return view('saludo', compact('nombre', 'consolas'));
    }
    // public function mensajes(CreateMessageRequest $request)
    // {	
    // 	$data = $request->all();
    //     return back()->with('info', 'Tu mensaje a sido enviado correctamente');
    // }
}
