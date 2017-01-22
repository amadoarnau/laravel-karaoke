<?php

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
    return view('home');
});

// Mostra llistes de temes de Karaoke
Route::get('/llistes', function () {
	return view('llistes');
});

// Crea una nova llista de Karaoke
Route::get('/crea', function () {
	return view('crea');
});

// Crea un nou item a una llista existent
Route::get('/llista/crea/{llista}', function ($llista) {
	return view('llista.crea',array("llista"=>$llista));
});

// Mostra llista
Route::get('/llista/{llista}', function ($llista) {
	return view( 'llista.mostra', array("llista"=>$llista) );
});

// Vota tema
Route::get('/vota/{tema}', function ($tema) {
    return view( 'vota', array("tema"=>$tema) );
});

