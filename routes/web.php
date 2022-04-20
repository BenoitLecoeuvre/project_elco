<?php

use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/* CREATION DE ROUTE POUR AVOIR DIFFERENTES PAGES*/
Route::get('/', function () {
    return view('accueil');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/presentations', function () {
    return view('presentations');
});

Route::get('/presentations', function () {
    return view('presentations');
});

// Formulaire de contact

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);


// Suite des routes

Route::get('/client', function () {
    return view('client');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/plan', function () {
    return view('plan');
});

Route::get('/droit', function () {
    return view('droit');
});

Route::get('/admin', function () {
    return view('admin');
});

// Formulaire de connexion 

 Route::get('/connexion , ConnexionController@formulaire');
 Route::post('/connexion, ConnexionController@traitement');

 Route::view('/mon-compte', 'mon compte');