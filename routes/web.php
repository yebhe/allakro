<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Offres_emploiController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\Centres_santeController;
use App\Http\Controllers\ActeursController;
use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\UserController;
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
    return view('layouts.home');
});

Route::get('amenagement', [App\Http\Controllers\AmenagementsController::class, 'index'])->name('amenagement');
Route::post('amenagement', [App\Http\Controllers\AmenagementsController::class, 'store'])->name('amenagement.store');

Route::get('demenagement', [App\Http\Controllers\DemenagementsController::class, 'index'])->name('demenagement');
Route::post('demenagement', [App\Http\Controllers\DemenagementsController::class, 'store'])->name('demenagement.store');

Route::get('naissance', [App\Http\Controllers\NaissanceController::class, 'index'])->name('naissance');
Route::post('naissance', [App\Http\Controllers\NaissanceController::class, 'store'])->name('naissance.store');

Route::get('deces', [App\Http\Controllers\DecesController::class, 'index'])->name('deces');
Route::post('deces', [App\Http\Controllers\DecesController::class, 'store'])->name('deces.store');

Route::get('inscription', [App\Http\Controllers\InscriptionController::class, 'index'])->name('inscription');
Route::post('inscription', [App\Http\Controllers\InscriptionController::class, 'store'])->name('inscription.store');

// competences
Route::get('competence', [App\Http\Controllers\CompetenceController::class, 'index'])->name('competence');
Route::post('competence', [App\Http\Controllers\CompetenceController::class, 'store'])->name('competence.store');
Route::get('communaute', [App\Http\Controllers\CompetenceController::class, 'create'])->name('communaute');

// Actualites
Route::get('actualites', [App\Http\Controllers\ActualitesController::class, 'index'])->name('actualites');

Route::get('projet', [App\Http\Controllers\Projets_mairieController::class, 'index'])->name('projet');

Route::get('sante', [App\Http\Controllers\Centres_santeController::class, 'index'])->name('sante');



