<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
