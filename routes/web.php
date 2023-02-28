<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionnaireController;
use App\Http\Controllers\RddController;
use App\Http\Controllers\SmController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    session_start();
    return view('welcome');
});

// Gestionnaire

// Route::get('ListeDemandeGestionnaire', function () {
//     return view('gestionnaire/listeDemande');
// })->name('gestionnaire.listeDemande');

Route::get('/ListeDemandeData', [GestionnaireController::class, 'listeDemande'] )->name('gestionnaire.listeDemandeData');

Route::get('FormulaireDeDemande', function () {
    return view('gestionnaire/formulaireDeDemande');
})->name('gestionnaire.FormulaireDeDemande');


// RDD
Route::get('/ListeDemandeRDD', [RddController::class, 'listeDemandeRdd'] )->name('RDD.listeDemande');

Route::get('FormulaireDeDemande', function () {
    return view('gestionnaire/formulaireDeDemande');
})->name('gestionnaire.FormulaireDeDemande');

// SM
Route::get('/ListeDemandeSM', [SmController::class, 'listeDemande'] )->name('SM.listeDemande');
Route::get('/Demande/{id?}', [SmController::class, 'formulaireDeDemande']);

// Auth
Route::post('/Logout', [AuthController::class, 'logout'] )->name('logout');
Route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::post('/loginWithData', [AuthController::class, 'loginWithData'] )->name('loginWithData');

// Admin
Route::get('/adminPage/{item?}', [AdminController::class, 'menu'] );


