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

Route::get('/', 'HomeController@index'->("pagina-home");

Route::get('/movies', 'MovieController@index')->name("pagina-movies");


/**
 * 
 * 2. Creare il model Movie, creare il Controller php artisan make:model ...
 * 3. Creare una rotta / che visualizza tutti i Movie, tramite la funzione index() del controller
 * rotta / associata a funzione index() del controller,
 * funzione index() restituisce una view con tutti i film,
 * per prendere i film dal database devo usare Movie::all()
 * 
 */