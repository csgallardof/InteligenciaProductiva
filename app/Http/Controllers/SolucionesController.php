<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel; 
use PHPExcel_IOFactory; 
use PHPExcel_Shared_Date;
use App\Solucion;
use App\Evento;
use DB;
use Illuminate\Support\Collection as Collection;

class SolucionesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $soluciones = Solucion::paginate(3);
        return view('admin.soluciones.home', compact('soluciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.soluciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         *
         * Guardar Archivo Excel en el storage de laravel
         *
        */   
        $file = $request->file('archivo');   //obtenemos el campo file definido en el formulario
        $nombre = $file->getClientOriginalName();   //obtenemos el nombre del archivo
        $nombre = strtotime("now")."-".$nombre;     // agregamos la fecha actual unix al inicio del nombre del archivo
        \Storage::disk('local')->put($nombre,  \File::get($file));   //indicamos que queremos guardar un nuevo archivo en el disco local
        
        /*
         *
         * Cargamos el  Archivo Excel para trabajarlo 
         *
        */ 
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$nombre ); 
        
        
        /*
         *
         * Hoja REGISTRO
         *
        */
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //
        
        //$nombreEvento= $objWorksheet->getCell("B1");    //obtenemos el nombre del evento
        
        $coordinador= $objWorksheet->getCell("B2");     //obtenemos el coordinador
        
        /*
        $InvDate= $objWorksheet->getCell("B3")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        //echo $fecha_php."<br>";
        
        $provincia= $objWorksheet->getCell("B4");   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        if(!is_null($provincia)){
            //echo $provincia-> id."<br>";
        }else{
            echo "No se ha ingresado la provincia"; ///PENDIENTE
        }
        
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        for ($i = 7; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            $tipo = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
            $variableSectorial= null;
            $grupo = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
            $sector= null;
            if($tipo != "" && $grupo != ""){
                $variableSectorial = DB::table('vsectors')->where('nombre_vsector', $tipo)->first();
                $sector = DB::table('sectors')->where('nombre_sector', $grupo)->first();
                //$sector = DB::table('sectors')->where('nombre_sector', $grupo)->first();
            }

            if( !is_null($variableSectorial) && !is_null($sector)){
                $informacion[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                    'nombre' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                    'apellidos' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                    'cedula' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                    'email' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                    'celular' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                    'telefonoExtension' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                    'grupo' => $sector-> id,
                    'tipo' => $variableSectorial-> id,
                );
            }   
        }
            
        foreach ($informacion as $registro) {   //recorremos todos los registros recogidos
            if( $registro["nombre"] != "" && $registro["apellidos"] != "" && $registro["cedula"] != "" && $registro["email"] != "" 
                && $registro["celular"] != "" && $registro["telefonoExtension"] != "" 
                && $registro["grupo"] != "" && $registro["tipo"] != ""){    //validamos que todos los campos de cada registro no se encuentren vacios
                
                echo $registro["nombre"]."--".$registro["apellidos"]."--".$registro["cedula"]."--".$registro["email"]."--".$registro["celular"]."--".$registro["telefonoExtension"]."--".$registro["grupo"]."--".$registro["tipo"]."<br>";
            }
        }
        */

        /*
         *
         * Hoja :: MESAS
         *
        */

        $objPHPExcel->setActiveSheetIndex(1);   //indicamos que vamos a trabajar en la hoja 0 que es la de mesas
        $objWorksheet = $objPHPExcel->getActiveSheet();  //

        $provincia= $objWorksheet->getCell("B4");   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        
        $nombreEvento= $objWorksheet->getCell("B1")."-".$provincia-> nombre_provincia."-".strtotime("now");    //obtenemos el nombre del evento
        $evento = new Evento;
        $evento-> nombre_evento = $nombreEvento;
        $evento-> save();

        $liderMesa= $objWorksheet->getCell("B2");     //obtenemos al lider de mesa
        
        $sistematizador= $objWorksheet->getCell("B3");     //obtenemos al lider de mesa
        
        $InvDate= $objWorksheet->getCell("B5")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        
        $sector= $objWorksheet->getCell("B6");   //obtenemos el grupo 
        $sector = DB::table('sectors')->where('nombre_sector', $sector)->first();

        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        //return "archivo guardado";

        for ($i = 9; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            $informacion2[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'eslabonCP' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'problematica' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'problematicaValidacion' => str_replace(" ", "", strtoupper( $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue() )),
                'pverbo' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'psujeto' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'pcomplemento' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'instrumentos' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'clasificacionEmpresa' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'ambito' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
                'responsable' => $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue(),
                'coresponsables' => $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue(),
            );
        }

        
        $countError = $countOK = 0;
        $arrayValProblemas[] = array(); 
        foreach ($informacion2 as $fila) {   //recorremos todos los registros recogidos
            if( $fila["eslabonCP"] != "" && $fila["problematica"] != "" && $fila["pverbo"] != "" && $fila["psujeto"] != "" 
                && $fila["pcomplemento"] != "" && $fila["instrumentos"] != "" && $fila["clasificacionEmpresa"] != "" 
                && $fila["ambito"] != "" && $fila["responsable"] != "" && $fila["coresponsables"] != ""){    //validamos que todos los campos de cada registro no se encuentren vacios

                
                $countOK++ ;
                
                $sipoc = DB::table('sipocs')->where('nombre_sipoc', $fila["eslabonCP"] )->first();
                $instrumento = DB::table('instrumentos')->where('nombre_instrumento', $fila["instrumentos"] )->first();
                $variableSectorial = DB::table('vsectors')->where('nombre_vsector', $fila["clasificacionEmpresa"] )->first();
                $ambito = DB::table('ambits')->where('nombre_ambit', $fila["ambito"] )->first();
                $evento = DB::table('eventos')->where('nombre_evento', $nombreEvento )->first();
                
                $solucion = new Solucion;
                $solucion-> sipoc_id = $sipoc-> id;   // Id Eslabón de la cadena Productiva
                $solucion-> problema_validar_solucion = $fila["problematicaValidacion"];     
                if (!in_array($fila["problematicaValidacion"], $arrayValProblemas)) {
                    $solucion-> problema_solucion= $fila["problematica"];
                }
                else{
                    $solucionAuxiliar = DB::table('solucions')->where('problema_validar_solucion', $fila["problematicaValidacion"] )->first();
                    $solucion-> problema_solucion= $solucionAuxiliar-> problema_solucion;
                }                                             
                $solucion-> verbo_solucion = $fila["pverbo"];
                $solucion-> sujeto_solucion = $fila["psujeto"];
                $solucion-> complemento_solucion = $fila["pcomplemento"];
                $solucion-> instrumento_id = $instrumento-> id;
                $solucion-> vsector_id = $variableSectorial-> id ;
                $solucion-> ambit_id = $ambito-> id;
                $solucion-> responsable_solucion = $fila["responsable"];
                $solucion-> corresponsable_solucion = $fila["coresponsables"];

                $solucion-> evento_id = $evento-> id;
                $solucion-> lider_mesa_solucion = $liderMesa;
                $solucion-> sistematizador_solucion = $sistematizador;
                $solucion-> provincia_id= $provincia-> id;
                $solucion-> sector_id= $sector-> id;   
                
                //Hoja -- registros
                $solucion-> coordinador_zonal_solucion= $coordinador;
                
                //quemados
                $solucion-> tipo_fuente= 1;     // 1 = despliegue territorial
                $solucion-> pajustada_id= 0;    // 0 porque esta columna es para consejo consultivo   
                $solucion-> thematic_id= 0;     // 0 porque esta columna es para consejo consultivo    
                
                $solucion-> save(); 
                array_push($arrayValProblemas, $fila["problematicaValidacion"]);   
                                    
            }else{
                $countError++;
            }           
        }

        return redirect('soluciones');
        
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
        $item = solucion::find($id);

        return view('admin.soluciones.edit', compact('item'));
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
        $solucion = solucion::find($id)->delete();
        
        //$categoria= DB::table('categoria')->where('path','LIKE','%/'.$id.'%')->delete();

        //Flash::error("La categor&iacute;a '".$nombreCategoria."' ha sido borrada de forma exitosa!");
        return redirect('soluciones');
    }



    public function vistaPreviaMesas(Request $request)
    {
        $file = $request->file('archivo');   //obtenemos el campo file definido en el formulario
        $nombre = $file->getClientOriginalName();   //obtenemos el nombre del archivo
        $nombre = strtotime("now")."-".$nombre;     // agregamos la fecha actual unix al inicio del nombre del archivo
        \Storage::disk('local')->put($nombre,  \File::get($file));   //indicamos que queremos guardar un nuevo archivo en el disco local
        
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$nombre ); 
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //
        
        //$nombreEvento= $objWorksheet->getCell("B1");    //obtenemos el nombre del evento
        
        $coordinador= $objWorksheet->getCell("B2")->getValue();     //obtenemos el coordinador    

        $objPHPExcel->setActiveSheetIndex(1);   //indicamos que vamos a trabajar en la hoja 0 que es la de mesas
        $objWorksheet = $objPHPExcel->getActiveSheet();  //

        $provincia= $objWorksheet->getCell("B4");   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        
        $nombreEvento= $objWorksheet->getCell("B1")."-".$provincia-> nombre_provincia."-".strtotime("now");    //obtenemos el nombre del evento
        $evento = new Evento;
        $evento-> nombre_evento = $nombreEvento;
        $evento-> save();

        $liderMesa= $objWorksheet->getCell("B2")->getValue();     //obtenemos al lider de mesa
        
        $sistematizador= $objWorksheet->getCell("B3")->getValue();     //obtenemos al lider de mesa
        
        $InvDate= $objWorksheet->getCell("B5")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        
        $sector= $objWorksheet->getCell("B6");   //obtenemos el grupo 
        $sector = DB::table('sectors')->where('nombre_sector', $sector)->first();

        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        //return "archivo guardado";

        for ($i = 9; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            $informacion2[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'eslabonCP' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'problematica' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'problematicaValidacion' => str_replace(" ", "", strtoupper( $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue() )),
                'pverbo' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'psujeto' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'pcomplemento' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'instrumentos' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'clasificacionEmpresa' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'ambito' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
                'responsable' => $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue(),
                'coresponsables' => $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue(),
            );
        }

        
        $soluciones[] = array();  
        $errores[] = array();
        $countOK = 0;
        $arrayValProblemas[] = array(); 


        foreach ($informacion2 as $fila) {   //recorremos todos los registros recogidos
            if( $fila["eslabonCP"] != "" && $fila["problematica"] != "" && $fila["pverbo"] != "" && $fila["psujeto"] != "" 
                && $fila["pcomplemento"] != "" && $fila["instrumentos"] != "" && $fila["clasificacionEmpresa"] != "" 
                && $fila["ambito"] != "" && $fila["responsable"] != "" && $fila["coresponsables"] != ""){    //validamos que todos los campos de cada registro no se encuentren vacios
                
                $solucion = new Solucion;
                $solucion-> problema_solucion= $fila["problematica"];

                $sipoc = DB::table('sipocs')->where('nombre_sipoc', $fila["eslabonCP"] )->first();
                $instrumento = DB::table('instrumentos')->where('nombre_instrumento', $fila["instrumentos"] )->first();
                $variableSectorial = DB::table('vsectors')->where('nombre_vsector', $fila["clasificacionEmpresa"] )->first();
                $ambito = DB::table('ambits')->where('nombre_ambit', $fila["ambito"] )->first();
                $evento = DB::table('eventos')->where('nombre_evento', $nombreEvento )->first();
                
                
                $solucion-> sipoc_id = $sipoc-> id;   // Id Eslabón de la cadena Productiva
                $solucion-> problema_validar_solucion = $fila["problematicaValidacion"]; 
                if (!in_array($fila["problematicaValidacion"], $arrayValProblemas)) {
                    $solucion-> problema_solucion= $fila["problematica"];
                }
                else{
                    //$solucionAuxiliar = DB::table('solucions')->where('problema_validar_solucion', $fila["problematicaValidacion"] )->first();
                    //$solucion-> problema_solucion= $solucionAuxiliar-> problema_solucion;

                    $solucion-> problema_solucion= $fila["problematica"];

                }                                             
                $solucion-> verbo_solucion = $fila["pverbo"];
                $solucion-> sujeto_solucion = $fila["psujeto"];
                $solucion-> complemento_solucion = $fila["pcomplemento"];
                $solucion-> instrumento_id = $instrumento-> id;
                $solucion-> vsector_id = $variableSectorial-> id ;
                $solucion-> ambit_id = $ambito-> id;
                $solucion-> responsable_solucion = $fila["responsable"];
                $solucion-> corresponsable_solucion = $fila["coresponsables"];

                $solucion-> evento_id = $evento-> id;
                $solucion-> lider_mesa_solucion = $liderMesa;
                $solucion-> sistematizador_solucion = $sistematizador;
                $solucion-> provincia_id= $provincia-> id;
                $solucion-> sector_id= $sector-> id;   
                
                //Hoja -- registros
                $solucion-> coordinador_zonal_solucion= $coordinador;
                
                //quemados
                $solucion-> tipo_fuente= 1;     // 1 = despliegue territorial
                $solucion-> pajustada_id= 0;    // 0 porque esta columna es para consejo consultivo   
                $solucion-> thematic_id= 0;     // 0 porque esta columna es para consejo consultivo    
                
                //$solucion-> save();
                array_push($soluciones, $solucion); 
                array_push($arrayValProblemas, $fila["problematicaValidacion"]);  

                
                $solucionAuxiliar = DB::table('solucions')->where('problema_validar_solucion', $fila["problematicaValidacion"] )->first();
                if( $solucionAuxiliar != null){                        
                    $error = "Fila ". $fila['numFila'].": La problem&aacute;tica :\"".$fila['problematica']."\" ya se encuentra registrada";
                    array_push($errores, $error);   
                }

            }else{
                $error = "Se encontraron campos vacios en la Fila ". $fila['numFila'];
                array_push($errores, $error); 
            }       
        }//FIN del foreach

        unset($soluciones[0]);
        unset($errores[0]);
        $datos = Collection::make($soluciones);
        $errores = Collection::make($errores);
        return view('admin.soluciones.vistaPreviaMesas')->with(["datos"=>$datos, "errores"=>$errores]); 
    } 


}
