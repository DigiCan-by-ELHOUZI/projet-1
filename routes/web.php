<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;

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

/* ------------------------------------------------------------------------------------------ */

  Route::get('/', [WelcomeController::class, 'index'])->name('home');
  Route::get('/courses', [WelcomeController::class, 'courses'])->name('courses');
  Route::get('/pricing', [WelcomeController::class, 'pricing'])->name('pricing');
  Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');

/* ------------------------------------------------------------------------------------------ */

Route::get('/adherent', 'App\Http\Controllers\AdherentControl@getUsers');

Route:: resource('afcompetition', 'App\Http\Controllers\ComputControl');
// Route::get('afcompetition/{afcompetition}', 'AfcompetitionController@show')->name('afcompetition.show');

Route::get('/comp', 'App\Http\Controllers\CompetiControl@getUsers');

Route::get('/Membre', 'App\Http\Controllers\MembreControl@getUsers');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard')->middleware('auth')->middleware('logs-out-banned-user')->middleware('role:admin|coach|user');

// Routes pour l'authentification des membres
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'membre', 'namespace' => 'App\Http\Controllers\Membre'], function () {
    Route::get('/', 'HomeController@index')->name('membre.home');
    // Ajoutez les autres routes spécifiques aux membres ici
});

// Routes pour l'authentification des entraîneurs
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'entraineurs', 'namespace' => 'App\Http\Controllers\Entraineur'], function () {
    Route::get('/', 'HomeController@index')->name('entraineurs.home');
    // Ajoutez les autres routes spécifiques aux entraîneurs ici
});
