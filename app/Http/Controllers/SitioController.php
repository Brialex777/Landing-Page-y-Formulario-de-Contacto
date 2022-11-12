<?php

namespace App\Http\Controllers;
use App\Models\Contacto;

use App\Models\cr;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo = null){
        $nombre = "";
        $correo = "";
        
        if ($codigo == 1234){
            $nombre = "Roberto Cerrano Casas";
            $correo = "roberto@gmail.com";
        }

    return view('miweb/contacto', compact('nombre', 'correo'));
    }

    public function index()
    {
        return view('miweb/index');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|max:150',
            'correo' => 'required|max:150|email',
            'comentario' => 'max:150'
        ]);

        Contacto::create($request->all());
        
        return redirect('/');
    }
}
