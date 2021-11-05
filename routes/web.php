<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
Route::get('/users', [UserController::Class, 'liste'])->name('liste');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/changepassword', [UserController::Class, 'formulaireChanger'])->name('changer');
Route::post('/changepassword', [UserController::Class, 'modifiermdp'])->name('modifiermdp');

Route::get('{email}', [UserController::Class, 'voir'])->name('voir');