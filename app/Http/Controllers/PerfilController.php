<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function create(){
        return view ('perfilUsuario');
    }

    
}
