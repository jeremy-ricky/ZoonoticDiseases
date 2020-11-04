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
    return view('welcome');
});

// Route Resource

Route::resource('Especes', 'ControllerEspece');
Route::resource('Poissons', 'ControllerPoisson');
Route::resource('AgentRessencements', 'ControllerAgentRessencement');
Route::resource('Debarquements', 'ControllerDebarquement');
Route::resource('Embarquements', 'ControllerEmbarquement');
Route::resource('Prises', 'ControllerPrise');
Route::resource('Ressencements', 'ControllerRessencement');
Route::resource('Campagnes', 'ControllerCampagne');
Route::resource('Outils', 'ControllerOutil');
Route::resource('Pecheurs', 'ControllerPecheur');
Route::resource('AssociationPecheurs', 'ControllerAssociationPecheur');
Route::resource('Periodes', 'ControllerPeriode');
Route::resource('Zones', 'ControllerZone');
Route::resource('Details', 'ControllerDetail');
Route::resource('Patrouilles', 'ControllerPatrouille');
Route::resource('Navires', 'ControllerNavire');
Route::resource('Sanctions', 'ControllerSanction');

//Route en Solo