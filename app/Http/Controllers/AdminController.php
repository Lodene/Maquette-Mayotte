<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function menu(){
        $jsonData = file_get_contents(public_path('data.json')); // Lit le fichier JSON
        $data = json_decode($jsonData, true);
        return view('admin.menu', [
            'datas' => $data
        ]);
    }
}
