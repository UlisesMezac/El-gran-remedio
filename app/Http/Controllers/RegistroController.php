<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function create(){
        return view ('auth.register');
      
    }

    public function view(){
        return view ('perfilUsuario');
      
    }




    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'apellidoP' => 'required' ,
            'apellidoM' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'telefono' => 'required',
            'estado' => 'required',
            'cp' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'noEx' => 'required',
            'noIn' => 'required',

        ]);

    
      $user =  User::create(request([
            'name',
            'apellidoP' ,
            'apellidoM',
            'email',
            'password',
            'telefono',
            'estado',
            'cp',
            'colonia',
            'calle',
            'noEx',
            'noIn'
        ]));

          
        auth()->login($user);
        return redirect()->to('login');
      }

      public function edit(User $user){
        
        return view ('editarUsuario', [
            'user' => $user
        ]);

      }
}

