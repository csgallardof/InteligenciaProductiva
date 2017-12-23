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


Auth::routes();

Route::get('/', function () {
     return view('inicio');
});

Route::get('/reporte','SolucionesController@reporte1');

Route::post('/reporte',[
     'uses'=>'SolucionesController@buscar',
     'as'=>'reporte1.resultado'
]);

Route::get('/visorgeneral', 'PaginasController@visorgeneral');

Route::get('/despliegueterritorial', 'PaginasController@despliegueterritorial');

Route::get('/reportegeneralccpt', 'PaginasController@reportegeneralccpt');

Route::get('/cifras', 'PaginasController@cifrasccpt');

Route::get('/vocaciones', 'PaginasController@vocaciones');

Route::get('/indice', 'PaginasController@indices');

Route::get('/inversiones', 'PaginasController@contratosinversion');

Route::get('/invertir_en_el_ecuador', 'PaginasController@invertir_en_el_ecuador');

// rutas pruebas usuarios

Route::get('/usuarios','PaginasController@usuarios');

Route::get('/EventosParticipantes','PaginasController@UsuariosEvento');

//Route::get('/EventosParticipantes','PaginasController@participantes');

Route::post('/despliegueterritorial',['uses'=>'PaginasController@buscar','as'=>'despliegue.resultado']);

Route::get('/detalle-despliegue/{id}','PaginasController@detalledespliegue');

Route::get('/detalle-ccpt/{pajustada_id}/{sector_id}/{ambit_id}/{sipoc_id}','PaginasController@detalleccpt');

Route::get('/indice/indicadoresProvincia', 'PaginasController@indicadoresProvincia');

Route::get('/consejoconsultivo', 'ConsejoConsultivoController@consejoconsultivo');

Route::post('/consejoconsultivo',[
     'uses'=>'ConsejoConsultivoController@buscar',
     'as'=>'consejo.resultado'
]);

Route::post('/busqueda',[
     'uses'=>'PaginasController@busquedaGeneral',
     'as'=>'busquedaGeneral'
]);




Route::get('storage/{archivo}', function ($archivo) {
     $storage_path = storage_path('app').'/storage/archivos_actividades';
     $url = $storage_path.'/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::disk('local3')->exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
      
})->name('descargarArchivo');

/*
*
* ADMINISTRACION
*
*/
Route::group(['prefix' => 'admin','middleware'=>['auth','admin'] ], function(){

     Route::get('/home', 'HomeController@index')->name('home');
     
     Route::resource('sipocs','SipocsController');
     
     Route::resource('instrumentos','InstrumentosController');

     Route::resource('thematics','ThematicsController');

     Route::resource('sectors','SectorsController');

     Route::resource('vsectors','VsectorsController');

     Route::resource('ambits','AmbitsController');

     Route::resource('provincias','ProvinciasController');

     Route::resource('eventos','EventosController');

     Route::resource('pajustadas','PajustadasController');

     Route::resource('pajustadas','PajustadasController');

     Route::resource('soluciones','SolucionesController');

     Route::resource('instituciones','InstitucionController');

     //Route::get('soluciones','SolucionesController@create');
     //Route::post('soluciones/guardar','SolucionesController@store');

     Route::resource('participantes','ParticipantesController');  //J. Arcos -- rutas para UsersController

     Route::post('/soluciones/vistaPreviaMesas',[
          'uses'    =>   'SolucionesController@vistaPreviaMesas',
          'as'      =>   'soluciones.vistaPreviaMesas'
     ]);  //J. Arcos -- vista Previa Matriz Mesas

     Route::get('participantes/vistaPrevia/{nombreArchivo}',[
          'uses'    =>   'ParticipantesController@vistaPreviaRegistro',
          'as' =>   'admin.participantes.vistaPrevia'
     ]);

     Route::post('/participantes/vistaPreviaRegistro',[
          'uses'=>'ParticipantesController@vistaPreviaRegistro',
          'as'=>'participantes.vistaPreviaRegistro'
     ]);  //J. Arcos -- vista Previa Matriz Registro Participante

     Route::post('/ccpt/vistaPrevia',[
          'uses'=>'ConsejoConsultivoController@vistaPreviaCCPT',
          'as'=>'ccpt.vistaPrevia'
     ]);


     Route::resource('vocaciones_productivas','VocacionesProductivasController');  //J. Arcos -- rutas para UsersController

     Route::resource('ccpt','ConsejoConsultivoController');  //J. Arcos -- rutas para UsersController

     
     Route::get('actor_solucion','InstitucionController@indexActorSolucion');  //admin cruds

     Route::get('actor_solucion/create',[
          'uses'=>'InstitucionController@createForm2',
          'as'=>'actorSolucion.create'
     ]);  //admin cruds

     Route::post('actor_solucion',[
          'uses'=>'InstitucionController@asignarActorSolucion',
          'as'=>'actorSolucion.asignar'
     ]);  //admin cruds

     Route::get('actores',[
          'uses'=>'InstitucionController@indexActorSolucion',
          'as'=>'actores'
     ]);  //admin cruds

     Route::get('soluciones_por_tipo/{tipo_fuente}','SolucionesController@getSolucionesByTipoFuente');


});



Route::group(['prefix' => 'institucion','middleware'=>['auth'] ], function(){

     Route::get('home','InstitucionController@home');  //página dashboard para las instituciones

     Route::get('verSolucion/despliegue/{tipo_actor}/{idSolucion}',['uses'=>'ActividadesController@verActividadesDespliegue','as'=>'verSolucion.despliegue']);

     Route::get('verSolucion/consejo/{tipo_actor}/{idSolucion}',['uses'=>'ActividadesController@verActividadesConsejo','as'=>'verSolucion.consejo']);

     Route::get('despliegue/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createDespliegue','as'=>'actividades.createDespliegue']);

     Route::get('consejo/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createConsejo','as'=>'actividades.createConsejo']);

     Route::post('actividad/save/{tipo_fuente}/{idSolucion}',['uses'=>'ActividadesController@saveActividad','as'=>'actividades.saveActividad']);
     
});