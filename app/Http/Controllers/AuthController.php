<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {

    function logout(){
        $GLOBALS['auth'] = 0;
        return view("auth.login");
    }

    function login(){
        return view("auth.login");
    }

    function loginWithData(){
        $test = request()->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $attributes = [
            'username' => $test['username'],
            'password' => $test['password'],
        ];

        $jsonData = file_get_contents(public_path('exempleBddAuth.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);

        foreach ($data as $loop) {
            if ($loop['username'] == $attributes['username'] && $loop['password'] ==  $attributes['password']){
                $GLOBALS['auth'] = 1;
                return redirect()->route('gestionnaire.listeDemandeData');
            }
        }
        return view("auth.login");
    }
}
