<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ud2Controller extends Controller
{
    public function inicio()
    {
        return "Hola";
    }

    public function inicionombre($nombre)
    {
        return view ("saludo",['nombre' => $nombre]);
    }

    public function iniciocolor($nombre,$color)
    {
        return view ("saludocolor",['nombre' => $nombre,'color'=>$color]);
    }

    public function contacto()
    {
    	$nom=request()->get('Nombre')." ".request()->get('Apellido');
        return view ("saludocolor",['nombre' => $nom,'color' => request()->get('Color')]);
    }

    public function contacto_req(Request $request)
    {
    	$nom=$request->input("Nombre")." ".$request->input("Apellido");
        return view ("saludocolor",['nombre' => $nom,'color' => $request->input("Color")]);
    }

    public function contactomulti(Request $request)
    {
        return view ("multi",['nombre' => $request->input("Nombre")]);
    }      
}
