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

// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::get('/Administrator', function () {
    return view('backend.welcome');
});

Route::get('/Dashbord', function () {
    return view('DashbordGeneralAdmin')->name('Dashbord');
});

Route::post('/Welcome', 'ControllerLogin@Login')->name('Welcome');
Route::get('/Logout', 'ControllerLogin@Logout')->name('Logout');
// Route Resource

Route::resource('Alerts', 'ControllerAlert');
Route::resource('Animals', 'ControllerAnimal');
Route::resource('Bailleurs', 'ControllerBailleur');
Route::resource('Depenses', 'ControllerDepense');
Route::resource('Symptomes', 'ControllerSymptome');
Route::resource('Projects', 'ControllerProjet');
Route::resource('Prise_decision', 'ControllerPrisedecision');
Route::resource('Personnes', 'ControllerPersonne');
Route::resource('Ngos', 'ControllerOng');
Route::resource('Mentors', 'ControllerMentor');
Route::resource('Maladies', 'ControllerMaladie');
Route::resource('Periodes', 'ControllerPeriode');
Route::resource('Zones', 'ControllerZone');
Route::resource('Financements', 'ControllerFinancement');

//Route en Solo
Route::get('/', 'forntendController@homepage')->name('homepage');