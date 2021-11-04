<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\ConnexionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [InscriptionController::Class, 'formulaire']);
Route::post('/inscription', [InscriptionController::Class, 'traitement']);

Route::get('/utilisateurs', [UtilisateursController::Class, 'liste']);

Route::get('/connexion', [ConnexionController::Class, 'formulaire']);
Route::post('/connexion', [ConnexionController::Class, 'traitement']);
Route::get('/mon-compte', function(){
    return view('mon-compte');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
