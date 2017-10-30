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

Route::get('/app', function(){
	return view('inicio');
});

Route::resource('sipocs','SipocsController');

Route::resource('thematics','ThematicsController');

Route::resource('sectors','SectorsController');

Route::resource('vsectors','VsectorsController');

Route::resource('ambits','AmbitsController');

Route::resource('pajustadas','PajustadasController');


Route::get('/visorgeneral', 'PaginasController@visorgeneral');
Route::get('/reportegeneralccpt', 'PaginasController@reportegeneralccpt');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
