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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('layout.default');
});
Route::get('/test1', function () {
    return "HELLO";
});
Auth::routes();

Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');
 })->name('clients.selectvillage');

 Route::get('/compteurs/create', function () {
    return view('compteurs.create');
 })->name('compteurs.create');

 Route::get('/consommations/create', function () {
    return view('consommations.create');
 })->name('consommations.create');

Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');
Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');

Route::get('/consommations/selectcompteur', 'ConsommationController@selectcompteur')->name('consommations.selectcompteur');
Route::get('/consommations/selectclient', 'ConsommationController@selectclient')->name('consommations.selectclient');

Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');



 
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::resource('villages', 'VillageController');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::resource('abonnements', 'AbonnementController');
Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('compteurs', 'CompteurController');
Route::get('/agents/list', 'AgentController@list')->name('agents.list');
Route::resource('agents', 'AgentController');
Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::resource('comptables', 'ComptableController');
Route::get('/gestionnaires/list', 'GestionnaireController@list')->name('gestionnaires.list');
Route::resource('gestionnaires', 'GestionnaireController');
Route::get('/administrateurs/list', 'AdministrateurController@list')->name('administrateurs.list');
Route::resource('administrateurs', 'AdministrateurController');
Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');
Route::resource('consommations', 'ConsommationController');
Route::resource('clients', 'ClientController');

/* use Carbon\Carbon;

Route::get('carbon', function () {
   $date = Carbon::now();
   dump($date);
    $date->addDays(3);
   dump($date);
});
 */
use Illuminate\Support\Facades\Date;

Route::get('carbon', function () {
   $date = Date::now();
   dump($date);
   $newDate = $date->copy()->addDays(7);
   dump($newDate);
});





 



