<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller {

    function logout(){
        auth()->logout();
        return view("auth.login");
    }

    function login(){
        return view("auth.login");
    }

    function loginWithData(Request $req){

        $email = $req['email'];
        $pass = $req['password'];
    
        $credentials = array(
            'email' => $email,
            'password' => $pass
        );
    
        $auth = Auth::attempt($credentials);

        if ($auth) {
            session_start();
            $usr = User::where("email", "a@gmail.com")->first();
            // dd($usr);
            if ($usr->hasRole('admin')) {
                return redirect('/panelAdmin')->with('succes', 'Vous êtes connecté');
            }
            return redirect('/ListeDemandeData')->with('succes', 'Vous êtes connecté');
        } else {
            return back()
                ->withErrors([
                'name' => 'pas bon'
            ]);
        }
    }
    
 
}
