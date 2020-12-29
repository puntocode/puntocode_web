<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function index(){
        return view('pages.index');
    }

    public function contactoMail(){
        $data = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        //Mail::to('puntocodepy@gmail.com')->queue(new MessageReceived($data));
        Mail::to('puntocodepy@gmail.com')->send(new MessageReceived($data));
        return new MessageReceived($data);
        //return back()->with('flash', 'La consulta ha sido enviada correctamente');
    }
}
