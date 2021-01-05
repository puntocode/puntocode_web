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

    public function contactoMail(Request $request){

        $data = $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        Mail::to('puntocodepy@gmail.com')->send(new MessageReceived($data));
        //Mail::to('puntocodepy@gmail.com')->queue(new MessageReceived($data));
        return response()->json([$request->all()]);
    }
}
