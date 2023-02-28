<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatatableBuilder;

class GestionnaireController extends Controller
{
    public function listeDemande(){
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);
        return view('gestionnaire/listeDemande', [
            'data' => $data
        ]);
    }
}
