<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ControllerMail extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('mail.formulario');
    }

    public function send(Request $request){
        //Validar Campos del formulario
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'estado' => 'required'
        ]);
        //Capturar los Campos del formulario
        $data = array(
            'name' => $request->input('name'),
            'message' => $request->input('message'),
            'estado' => $request->input('estado')
        );

        //Capturar el campo email del formulario
        $email = $request->input('email');

        // Enviar el correo al destinatarios
        Mail::to($email)->send(new SendMail($data));

        return back()->with('success', 'Enviado exitosamente!');
    }
}
