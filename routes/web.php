<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdresseController;
use App\Models\Adresse;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'liste'])->name('liste');
Route::get('/modifierpassword', [UserController::class, 'afficheModifier'])->name('affiche');
Route::post('/modifierpassword', [UserController::class, 'modifierPassword'])->name('modifier');
Route::get('/user/{email}', [UserController::class, 'voir'])->name('voir');

Route::post('/message', [MessageController::class, 'nouveau'])->name('nouveau');
Route::post('/adresse', [AdresseController::class, 'nouveau'])->name('nouvel');
Route::get('/discussions', [MessageController::class, 'listes'])->name('discussions');