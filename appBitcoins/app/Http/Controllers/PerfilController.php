<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    //
    public function index($usuario=null){
        return view('perfil.index', compact('usuario'));
    }
}
