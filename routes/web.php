<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\JoueurController;

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
    return view('inc.acceuil');
});


//route pour club
Route::get('club.index', [ClubController::class, 'index'])->name('club.index');
Route::post('club.save', [ClubController::class, 'store'])->name('club.store');
Route::get('club.affiche', [ClubController::class, 'liste']);
Route::get('club.delete/{id}', [ClubController::class, 'destroy']);
Route::get('club.edit/{id}', [ClubController::class, 'edit']);
Route::put('club.update/{id}', [ClubController::class, 'update']);


//route pour joueur
Route::get('joueur.index', [JoueurController::class, 'index'])->name('joueur.index');
Route::post('joueur.save', [JoueurController::class, 'store'])->name('joueur.store');
Route::get('joueur.affiche', [JoueurController::class, 'liste']);
Route::get('joueur.delete/{id}', [JoueurController::class, 'destroy']);

Route::get('joueur.edit/{id}', [JoueurController::class, 'edit']);
Route::put('joueur.update/{id}', [JoueurController::class, 'update']);
Route::get('joueur.show/{id}', [JoueurController::class, 'show']);



