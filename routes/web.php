<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');

// ici les deux routes servent à créer un etudiants
Route::get('/etudiant/ajouter', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');

//ici c'est la route qui permet de voir un étudiant en particulier
Route::get('/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');


//route qui permet de modifier un étudiant
Route::get('/etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');


// ici c'est la route de suppression
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');