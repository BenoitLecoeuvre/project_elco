<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

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