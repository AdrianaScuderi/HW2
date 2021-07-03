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
    return view('homepage');
})->name('homepage');

Route::get('/login', "LoginController@login")->name("login");
Route::post('/login', "LoginController@checkLogin");
Route::get('/logout', "LoginController@logout")->name("logout");

Route::get('/registrazione', "RegisterController@index")->name('registrazione');
Route::post('/registrazione', "RegisterController@create");
Route::get('/registrazione/email/{q}', "RegisterController@checkemail")->name('checkemail');

Route::get('/prodotti', 'ProdottiController@index')->name('prodotti');
Route::get('/api/CaricoProdotti/{query}', "ApiController@CaricoProdotti")->name('caricoprodotti'); 
Route::post('/api/AggiungiPreferiti/{user}', "ApiController@AggiungiPreferiti")->name('aggiungipreferiti');
Route::post('/api/TogliPreferiti/{user}', "ApiController@TogliPreferiti")->name('toglipreferiti');
Route::get('/api/MantieniPreferiti/{user}', "ApiController@MantieniPreferiti")->name('mantienipreferiti');
Route::get('/api/CaricoArticoli', "ApiController@CaricoArticoli")->name('caricoarticoli');

Route::get('aboutus', function() {
    return view('aboutus');
})->name('aboutus');
Route::get('/api/Visualizzodipendenti', "AboutusController@VisualizzoDipendenti");
Route::get('/api/Qualifiche', "AboutusController@Dipendenti")->name('dipendenti');

Route::get('/servizi', function() {
    return view('servizi');
})->name('trattamenti');
Route::get('/api/VisualizzoServizi', "ServiziController@VisualizzoServizi")->name('servizi');

