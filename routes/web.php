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


Route::get('/inversiones', 'PaginasController@contratosinversion');

Route::get('/invertir_en_el_ecuador', 'PaginasController@invertir_en_el_ecuador');


Route::post('/participantes/vistaPreviaRegistro',['uses'=>'ParticipantesController@vistaPreviaRegistro','as'=>'participantes.vistaPreviaRegistro']);  //J. Arcos -- vista Previa Matriz Registro Participante

Route::resource('participantes','ParticipantesController');  //J. Arcos -- rutas para UsersController



// rutas pruebas usuarios

Route::get('/usuarios','PaginasController@usuarios');

Route::get('/EventosParticipantes','PaginasController@UsuariosEvento');

//Route::get('/EventosParticipantes','PaginasController@participantes');



Route::post('/despliegueterritorial',['uses'=>'PaginasController@buscar','as'=>'despliegue.resultado']);

Route::get('/detalle-despliegue/{id}','PaginasController@detalledespliegue');

Route::get('participantes/vistaPrevia/{nombreArchivo}',[
		'uses'	=>	'ParticipantesController@vistaPreviaRegistro',
		'as'	=>	'admin.participantes.vistaPrevia'
	]);

Route::get('/indice/indicadoresProvincia', 'PaginasController@indicadoresProvincia');

Route::resource('vocaciones_productivas','VocacionesProductivasController');  //J. Arcos -- rutas para UsersController

Route::resource('ccpt','ConsejoConsultivoController');  //J. Arcos -- rutas para UsersController

Route::post('/ccpt/vistaPrevia',['uses'=>'ConsejoConsultivoController@vistaPreviaCCPT','as'=>'ccpt.vistaPrevia']);

Route::get('/consejoconsultivo', 'ConsejoConsultivoController@consejoconsultivo');
Route::post('/consejoconsultivo',['uses'=>'ConsejoConsultivoController@buscar','as'=>'consejo.resultado']);

Route::get('/detalle-ccpt/{pajustada_id}/{sector_id}/{ambit_id}/{sipoc_id}','ConsejoConsultivoController@detalleccpt');

//Route::resource('instituciones','InstitucionController');  //admin cruds
Route::get('instituciones','InstitucionController@index')->name('instituciones.index');  //admin cruds
Route::get('instituciones/create','InstitucionController@create')->name('instituciones.create');  //admin cruds
Route::post('instituciones','InstitucionController@store')->name('instituciones.store');  //admin cruds

Route::get('actores','InstitucionController@indexActorSolucion');  //admin cruds
Route::get('actor_solucion','InstitucionController@indexActorSolucion');  //admin cruds
Route::get('actor_solucion/create','InstitucionController@createForm2');  //admin cruds
Route::post('actor_solucion','InstitucionController@asignarActorSolucion');  //admin cruds
Route::get('soluciones_por_tipo/{tipo_fuente}','SolucionesController@getSolucionesByTipoFuente');

Route::get('institucion/home','InstitucionController@home');  //página dashboard para las instituciones

Route::get('institucion/verSolucion/despliegue/{idSolucion}',['uses'=>'SolucionesController@verActividadesDespliegue','as'=>'verSolucion.despliegue']);

Route::get('institucion/verSolucion/consejo/{idSolucion}',['uses'=>'SolucionesController@verActividadesConsejo','as'=>'verSolucion.consejo']);

Route::get('institucion/despliegue/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createDespliegue','as'=>'actividades.createDespliegue']);

Route::get('institucion/consejo/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createConsejo','as'=>'actividades.createConsejo']);

Route::post('institucion/despliegue/actividad/save/{idSolucion}',['uses'=>'ActividadesController@saveActividadDespliegue','as'=>'actividades.saveActividadDespliegue']);
