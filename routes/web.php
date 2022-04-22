<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactAdmin;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\UserList;

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



Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/plan', function () {
    return view('plan');
});

Route::get('/droit', function () {
    return view('droit');
});

// Liste des membres
Route::get('/admin/member_list', [UserList::class, 'index']);
Route::delete('/admin/member_list/{user}', [UserList::class, 'destroy']);

// Administration
Route::get('/admin', [ContactAdmin::class, 'index']);
Route::post('/admin', [ContactAdmin::class, 'store']);
Route::delete('/admin/{contact}', [ContactAdmin::class, 'destroy']);

// Formulaire de connexion 
   /* route permettant de prendre les informations présentes dans le formulaire 
    et de les traiter */
 Route::get('/client', [ConnexionController::class, 'index']);
 Route::post('/client', [ConnexionController::class, 'traitement']);

   /* route permettant de rediriger l'utilisateur */
 Route::view('/mon-compte', 'mon-compte');
