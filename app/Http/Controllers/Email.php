<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emails;


class Email extends Controller
{
    public function index(){
        $listaEmails = self::listarTodosEmails();
        return view('email/index', compact('listaEmails'));
    }
    public function listarTodosEmails(){
        return Emails::select('id_email','de','para','dt_cadastro','assunto')->get();

    }
    public function listarEmailById(Request $request){
        $email = Emails::find($request->id);
        $emailSelecionado = view('email/renderEmail', compact('email'))->render();
        
        return response()->json($emailSelecionado);
    }
}
