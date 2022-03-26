<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
         return view ('auth.login');
    }

    public function store(){
        
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);
        }

        return redirect()->to('menuPrin');
    }




    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout(); 

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $redirect->to('/')->with('status', "Has cerrado sesión");

    }

  
}
