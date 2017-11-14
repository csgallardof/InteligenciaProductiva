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
     return view('inicio');
 });



Route::resource('sipocs','SipocsController');

Route::resource('thematics','ThematicsController');

Route::resource('sectors','SectorsController');

Route::resource('vsectors','VsectorsController');

Route::resource('ambits','AmbitsController');


Route::resource('provincias','ProvinciasController');

Route::resource('eventos','EventosController');



Route::resource('pajustadas','PajustadasController');

Route::resource('pajustadas','PajustadasController');


//Route::get('soluciones','SolucionesController@create');
//Route::post('soluciones/guardar','SolucionesController@store');

Route::resource('soluciones','SolucionesController');


Route::get('/visorgeneral', 'PaginasController@visorgeneral');

Route::resource('instrumentos','InstrumentosController');

Route::get('/despliegueterritorial', 'PaginasController@despliegueterritorial');


Route::get('/reportegeneralccpt', 'PaginasController@reportegeneralccpt');

Route::get('/cifras', 'PaginasController@cifrasccpt');

Route::get('/vocaciones', 'PaginasController@vocaciones');

Route::get('/indice', 'PaginasController@indices');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/soluciones/vistaPreviaMesas',['uses'=>'SolucionesController@vistaPreviaMesas','as'=>'soluciones.vistaPreviaMesas']);  //J. Arcos -- vista Previa Matriz Mesas

// Rutas de contratos de inversion 


Route::get('/contratos-de-inversion', 'PaginasController@contratosinversion');



// rutas pruebas usuarios

Route::get('/usuarios','PaginasController@usuarios');

Route::get('/EventosParticipantes','PaginasController@participantes');
