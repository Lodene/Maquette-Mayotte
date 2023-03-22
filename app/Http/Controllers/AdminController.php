<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function menu($elem){
        $tableau_elem = [];
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);

        foreach ($data as $element) {
            $sauv_element = $element[$elem];
            
            if (!isset($tableau_elem[$sauv_element])) {
                $tableau_elem[$sauv_element] = true;
            }
        }

        $tableau_elem_final = array_keys($tableau_elem);
        
        return view('admin.menu', [
            'datas' => $tableau_elem_final,
            'item' => $elem
        ]);
    }
    
    public function panelAdmin(){
        return view ("admin/panelAdmin", [
            'datas' => User::all()
        ]);
    }

    public function addRole(){
        return view ("admin/addRole", [
            'users' => User::all(),
            'roles' => Role::all()
        ]);
    }

    public function addRolePost(Request $req){
        // dd($req->user);
        $roleName = Role::where("id", $req->role)->first()->name;
        $user = User::where("id", $req->user)->first();
        if (!$user->hasRole($roleName)) {
            $user->assignRole($roleName);
            return redirect('/panelAdmin')->with('succes', 'Role ajouté');
        } else {
            return back()->with('succes', 'Vous êtes connecté')->withErrors([
                'error' => ''. $user->name . ' à déjà le role ' . $roleName
            ]);;
        }
    }

    public function delRole($user_id, $role){
        $user = User::find($user_id);
        $user->removeRole($role);
        
        return view ("admin/panelAdmin", [
            'datas' => User::all()
        ]);

    }
}
