<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{


    ///////petición a api, con parametros solicitados////////////
    public function redirect()

    {
        return Socialite::driver('google')->redirect();
    }



     //////////devolver al usuario, con la información de google//////////////
    public function callback()
    {
        $user = Socialite::driver('google')->user();


        ///buscar el usuario//
        $ourUser = User::where('external_provider', 'google')
        ->where('external_id', $user->getId())->first();



        if($ourUser){
            Auth::login($ourUser);
            return redirect("/dashboard");
        }

        $ourUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password'=> bcrypt('alpha-test-no-usar'),
            'external_provider'=>'google',
            'external_id'=>$user->getId(),
        
        ]);

        Auth::login($ourUser);
        return redirect("/");
    }
}
