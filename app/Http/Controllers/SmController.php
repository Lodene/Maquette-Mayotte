<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmController extends Controller
{
    public function listeDemande(){
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);
        return view('SM/listeDemande', [
            'data' => $data
        ]);
    }

    public function formulaireDeDemande($id){
        $elementARecuperer = null;
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $datas = json_decode($jsonData, true);
        foreach ($datas as $element) {
            if ($element["Id"] == $id) {
                // L'élément avec l'ID de 2 a été trouvé
                $elementARecuperer = $element;
                break;
            }
        }
        
  
        return view('SM/formulaireDeDemande', [
            'data' => $elementARecuperer,
            'id' => $id
        ]);
    }
}
