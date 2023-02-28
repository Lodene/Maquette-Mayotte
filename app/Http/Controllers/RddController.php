<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RddController extends Controller
{
    public function listeDemandeRdd(){
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);
        return view('RDD/listeDemande', [
            'data' => $data
        ]);
    }
}
