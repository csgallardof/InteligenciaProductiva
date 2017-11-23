<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel; 
use PHPExcel_IOFactory; 
use PHPExcel_Shared_Date;
use App\Solucion;
use App\Ambit;
use App\Sector;
use File;
use DB;
use Illuminate\Support\Collection as Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class ConsejoConsultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $soluciones = Solucion::search($request-> parametro)->where('tipo_fuente','=','2')->orderBy('id','DESC')->paginate(15);
        return view('admin.consejo.home')->with(["soluciones"=>$soluciones]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.consejo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(Request $request)
    {        
        /*
         *
         * Cargamos el  Archivo Excel para trabajarlo 
         *
        */ 
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$request-> nombreArchivo ); 
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //
          
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        
        for ($i = 2; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            $informacion3[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'mesa' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'propuesta_original' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'fomento_produccion_nacional' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'ambito' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'sector' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'responsable' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'corresponsables' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'eslabonCP' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
                'propuesta_unificada' => $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue(),
            );
        }

        foreach ($informacion3 as $fila) {   //recorremos todos los registros recogidos
            if( $fila["mesa"] != "" && $fila["propuesta_original"] != "" && $fila["propuesta_original"] != "" && $fila["ambito"] != "" && $fila["sector"] != "" && $fila["responsable"] != "" && $fila["eslabonCP"] != "" && $fila["propuesta_unificada"] != "" ) 
            {    //validamos que todos los campos de cada registro no se encuentren vacios
                $solucion = new Solucion;
                
                $mesa = DB::table('mesas')->where('nombre_mesa', $fila["mesa"] )->first();
                $solucion-> mesa_id = $mesa-> id;
                
                $thematic = DB::table('thematics')->where('nombre_thematic', $fila["fomento_produccion_nacional"])-> first();
            	$solucion-> thematic_id= $thematic-> id;
                
                $ambito = DB::table('ambits')->where('nombre_ambit', $fila["ambito"] )->first();
            	$solucion-> ambit_id = $ambito-> id;
                
                $sector = DB::table('sectors')->where('nombre_sector', $fila["sector"] )->first();
            	$solucion-> sector_id= $sector-> id;  
                
                $sipoc = DB::table('sipocs')->where('nombre_sipoc', $fila["eslabonCP"] )->first();
            	$solucion-> sipoc_id = $sipoc-> id;   // Id Eslabón de la cadena Productiva
                
                $pajustada = DB::table('pajustadas')->where('nombre_pajustada', trim($fila["propuesta_unificada"]) )->first();
            	$solucion-> pajustada_id= $pajustada-> id;
                
            	$solucion-> solucion_ccpt = $fila["propuesta_original"];
                $solucion-> responsable_solucion = $fila["responsable"];
                $solucion-> corresponsable_solucion = $fila["corresponsables"]; 
                $solucion-> tipo_fuente= 2;
                
                //quemados	
                $solucion-> problema_solucion= "";				// vacio porque esta columna es para despliegue territorial
                $solucion-> problema_validar_solucion = "";	// vacio porque esta columna es para despliegue territorial
                $solucion-> verbo_solucion = "";				// vacio porque esta columna es para despliegue territorial
                $solucion-> sujeto_solucion = "";				// vacio porque esta columna es para despliegue territorial
                $solucion-> complemento_solucion = ""; 			// vacio porque esta columna es para despliegue territorial
                $solucion-> coordinador_zonal_solucion= "";		// vacio porque esta columna es para despliegue territorial
                $solucion-> sistematizador_solucion = "";		// vacio porque esta columna es para despliegue territorial
                $solucion-> lider_mesa_solucion = "";			// vacio porque esta columna es para despliegue territorial
                $solucion-> evento_id =  0;						// 0 porque esta columna es para despliegue territorial
                $solucion-> provincia_id= 0;					// 0 porque esta columna es para despliegue territorial
                $solucion-> tipo_empresa_id = 0;				// 0 porque esta columna es para despliegue territorial
                $solucion-> instrumento_id = 0;					// 0 porque esta columna es para despliegue territorial
                
	            $solucion-> vsector_id = 0;     // sin utilizar por el momento
   
                $solucion->save();
                
            }     
        }//FIN del foreach
        
        Flash::success("Se registradon ".count($informacion3)." soluciones.");
        
        return redirect('ccpt');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /*
        $sector = sector::find($id);
        $this ->validate($request,[
            'nombre_sector' =>'required'
        ]);
        $sector->nombre_sector = $request->nombre_sector;
        $sector->save();
        return redirect('sectors');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }



    public function vistaPreviaCCPT(Request $request)
    {
        $errores[] = array();

        $file = $request->file('archivo');   //obtenemos el campo file definido en el formulario
        $nombreArchivo = $file->getClientOriginalName();   //obtenemos el nombre del archivo
        $nombreArchivo = strtotime("now")."-".$nombreArchivo;     // agregamos la fecha actual unix al inicio del nombre del archivo
        \Storage::disk('local')->put($nombreArchivo,  \File::get($file));   //indicamos que queremos guardar un nuevo archivo en el disco local
        
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$nombreArchivo ); 
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //
          
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        
        for ($i = 2; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            $informacion3[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'mesa' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'propuesta_original' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'fomento_produccion_nacional' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'ambito' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'sector' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'responsable' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'corresponsables' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'eslabonCP' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
                'propuesta_unificada' => $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue(),
            );
        }

        
        $soluciones[] = array();

        foreach ($informacion3 as $fila) {   //recorremos todos los registros recogidos
            if( $fila["mesa"] != "" && $fila["propuesta_original"] != "" && $fila["propuesta_original"] != "" && $fila["ambito"] != "" && $fila["sector"] != "" && $fila["responsable"] != "" && $fila["eslabonCP"] != "" && $fila["propuesta_unificada"] != "" ) 
            {    //validamos que todos los campos de cada registro no se encuentren vacios
                $valido = true;
                $solucion = new Solucion;
                
                //Validacion MESA
                $mesa = DB::table('mesas')->where('nombre_mesa', $fila["mesa"] )->first();
                if( !is_null($mesa) ){
                	$solucion-> mesa_id = $mesa-> id;
                }else{
                	$error = "Celda A". $fila['numFila'].": No se encontro la mesa.";
                	array_push($errores, $error);
                	$solucion-> mesa_id = 0;
                	$valido = false;
                }

                //Validacion THEMATICA
                $thematic = DB::table('thematics')->where('nombre_thematic', $fila["fomento_produccion_nacional"])-> first();
                if( !is_null($thematic) ){
                	$solucion-> thematic_id= $thematic-> id;
                }else{
                	$error = "CELDA C". $fila['numFila'].": No se encontro la thematica.";
                	array_push($errores, $error);
                	$solucion-> thematic_id= 0;
                	$valido = false;
                }

                //Validacion AMBITO
                $ambito = DB::table('ambits')->where('nombre_ambit', $fila["ambito"] )->first();
                if( !is_null($ambito) ){
                	$solucion-> ambit_id = $ambito-> id;
                }else{
                	$error = "CELDA D". $fila['numFila'].": No se encontro el ambito.";
                	array_push($errores, $error);
                	$solucion-> ambit_id = 0;
                	$valido = false;
                }

                //Validacion SECTOR
                $sector = DB::table('sectors')->where('nombre_sector', $fila["sector"] )->first();
                if( !is_null($sector) ){
                	$solucion-> sector_id= $sector-> id;  
                }else{
                	$error = "CELDA E". $fila['numFila'].": No se encontro el sector.";
                	array_push($errores, $error);
                	$solucion-> sector_id= 0;
                	$valido = false;
                }

                //Validacion SIPOC
                $sipoc = DB::table('sipocs')->where('nombre_sipoc', $fila["eslabonCP"] )->first();
                if( !is_null($sipoc) ){
                	$solucion-> sipoc_id = $sipoc-> id;   // Id Eslabón de la cadena Productiva
                }else{
                	$error = "CELDA H". $fila['numFila'].": No se encontro el sipoc.";
                	array_push($errores, $error);
                	$solucion-> sipoc_id = 0;   // Id Eslabón de la cadena Productiva;
                	$valido = false;
                }

                //Validacion PROPUESTA UNIFICADA
                $pajustada = DB::table('pajustadas')->where('nombre_pajustada', trim($fila["propuesta_unificada"]) )->first();
                if( !is_null($pajustada) ){
                	$solucion-> pajustada_id= $pajustada-> id;
                }else{
                	$error = "CELDA I". $fila['numFila'].": No se encontro la propuesta unificada.";
                	array_push($errores, $error);
                	$solucion-> pajustada_id= 0;
                	$valido = false;
                }

                if($valido === true){
                	$solucion-> solucion_ccpt = $fila["propuesta_original"];
	                $solucion-> responsable_solucion = $fila["responsable"];
	                $solucion-> corresponsable_solucion = $fila["corresponsables"]; 
	                $solucion-> tipo_fuente= 2;
	                
	                //quemados	
	                $solucion-> problema_solucion= "";				// vacio porque esta columna es para despliegue territorial
	                $solucion-> problema_validar_solucion = "";	// vacio porque esta columna es para despliegue territorial
	                $solucion-> verbo_solucion = "";				// vacio porque esta columna es para despliegue territorial
	                $solucion-> sujeto_solucion = "";				// vacio porque esta columna es para despliegue territorial
	                $solucion-> complemento_solucion = ""; 			// vacio porque esta columna es para despliegue territorial
	                $solucion-> coordinador_zonal_solucion= "";		// vacio porque esta columna es para despliegue territorial
	                $solucion-> sistematizador_solucion = "";		// vacio porque esta columna es para despliegue territorial
	                $solucion-> lider_mesa_solucion = "";			// vacio porque esta columna es para despliegue territorial
	                $solucion-> evento_id =  0;						// 0 porque esta columna es para despliegue territorial
	                $solucion-> provincia_id= 0;					// 0 porque esta columna es para despliegue territorial
	                $solucion-> tipo_empresa_id = 0;				// 0 porque esta columna es para despliegue territorial
	                $solucion-> instrumento_id = 0;					// 0 porque esta columna es para despliegue territorial
	                
		            $solucion-> vsector_id = 0;     // sin utilizar por el momento
	   
	                array_push($soluciones, $solucion);
                }
 
            }else{
                $error = "Fila ". $fila['numFila'].": Se encontraron campos vacios.";
                array_push($errores, $error); 
            }     
        }//FIN del foreach
        
        unset($soluciones[0]);
        unset($errores[0]);
        
        if(count($errores) > 0){
            File::delete( storage_path('app').'/storage/'.$nombreArchivo);
            Flash::error("Se han encontrado ". count($errores)." errores detallados a continuaci&oacute;n:");
        }else{
            Flash::info("Se encontraron ". count($informacion3)." soluciones. Haga click en <b>\"Siguiente\"</b> para ir a la vista previa de los participantes.");
        }
        

        $datos = Collection::make($soluciones);
        $errores = Collection::make($errores);

        return view('admin.consejo.vistaPrevia')->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo]); 
        
    } 



    public function consejoconsultivo(){


        $ambits = Ambit::all(); 

        $sectors= Sector::all(); 

        return view('consejoconsultivo')->with(["ambits"=>$ambits,"sectors"=>$sectors]);
        
    }

    public function buscar(Request $request){

        //dd ($request->provincias);

        $solucion_proveedores = Solucion::where('sector_id','=',$request->sectores)
                            ->where('ambit_id','=',$request->ambitos)
                            ->where('sipoc_id','=',1)
                            ->where('tipo_fuente','=',2)->get();

        $solucion_insumo = Solucion::where('sector_id','=',$request->sectores)
                            ->where('ambit_id','=',$request->ambitos)
                            ->where('sipoc_id','=',2)
                            ->where('tipo_fuente','=',2)->get();

        $solucion_proceso = Solucion::where('sector_id','=',$request->sectores)
                            ->where('ambit_id','=',$request->ambitos)
                            ->where('sipoc_id','=',3)
                            ->where('tipo_fuente','=',2)->get();

        $solucion_producto = Solucion::where('sector_id','=',$request->sectores)
                            ->where('ambit_id','=',$request->ambitos)
                            ->where('sipoc_id','=',4)
                            ->where('tipo_fuente','=',2)->get();

        $solucion_mercado = Solucion::where('sector_id','=',$request->sectores)
                            ->where('ambit_id','=',$request->ambitos)
                            ->where('sipoc_id','=',5)
                            ->where('tipo_fuente','=',2)->get();


        $ambits = Ambit::all(); 

         $sectors= Sector::all();

    
       
        return view('consejoconsultivo')->with(["solucion_proveedores"=>$solucion_proveedores,
                                                    "solucion_insumo"=>$solucion_insumo,
                                                    "solucion_proceso"=>$solucion_proceso,
                                                    "solucion_producto"=>$solucion_producto,
                                                    "solucion_mercado"=>$solucion_mercado,
                                                    "ambits"=>$ambits,
                                                    "sectors"=>$sectors

                                                ]);

    }

}
