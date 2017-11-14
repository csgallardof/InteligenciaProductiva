<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel; 
use PHPExcel_IOFactory; 
use PHPExcel_Shared_Date;
use DB;

class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
		echo "Proximamente index de registro de participantes";   
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {

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

    public function vistaPreviaRegistro(Request $request)
    {
        $errores[] = array();
        $file = $request->file('archivo');   //obtenemos el campo file definido en el formulario
        $nombreArchivo = $file->getClientOriginalName();   //obtenemos el nombre del archivo
        $nombreArchivo = strtotime("now")."-".$nombreArchivo;     // agregamos la fecha actual unix al inicio del nombre del archivo
        \Storage::disk('local')->put($nombreArchivo,  \File::get($file));   //indicamos que queremos guardar un nuevo archivo en el disco local
        /*
         * Cargamos el  Archivo Excel para trabajarlo 
        */ 
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$nombreArchivo); 
        
        /*
         *
         * Hoja REGISTRO
         *
        */
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //

        $provincia= $objWorksheet->getCell("B4")->getValue();   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        
        if( is_null($provincia) ){
            $error = "Ingrese una provincia v&aacute;lida";
            array_push($errores, $error); 
        }
        
        $nombreEvento= $objWorksheet->getCell("B1")."-".$provincia->nombre_provincia;    //obtenemos el nombre del evento
        $nombreEventoAuxiliar= DB::table('eventos')->where([  ['nombre_evento', '=', $nombreEvento], /*['provincia_id', '=', $provincia->id]*/ ])->first();
        if( $nombreEventoAuxiliar != null){
            $error = "El nombre del evento ya se encuentra registrado";
            array_push($errores, $error); 
        }
        
        $coordinador= $objWorksheet->getCell("B2");     //obtenemos el coordinador
        
        $InvDate= $objWorksheet->getCell("B3")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        for ($i = 7; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            
            /*
            $sector = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
            $sector = DB::table('sectors')->where('nombre_sector', $sector)->first();
            if($sector == null ){
            	$error = "Fila ".$i.": Ingrese un grupo v&aacute;lido";
            	array_push($errores, $error); 
            }

            $vsector = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue()->getValue();
            $vsector = DB::table('vsectors')->where('nombre_vsector', $vsector)->first();
            if($vsector == null ){
            	$error = "Fila ".$i.": Ingrese un tipo de participante v&aacute;lido";
            	array_push($errores, $error); 
            }
            */
            
            $informacion[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'nombre' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'apellidos' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'cedula' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'email' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'celular' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'telefonoExtension' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'grupo' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'tipo' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
            );
        }
            
        foreach ($informacion as $registro) {   //recorremos todos los registros recogidos
            if( $registro["nombre"] != "" && $registro["apellidos"] != "" && $registro["cedula"] != "" && $registro["email"] != "" 
                && $registro["celular"] != "" && $registro["telefonoExtension"] != "" 
                && $registro["grupo"] != "" && $registro["tipo"] != "")
            {    //validamos que todos los campos de cada registro no se encuentren vacios
                
                $solucion = new Solucion;
                $solucion-> problema_solucion= $fila["problematica"];

                $sipoc = DB::table('sipocs')->where('nombre_sipoc', $fila["eslabonCP"] )->first();
                $instrumento = DB::table('instrumentos')->where('nombre_instrumento', $fila["instrumentos"] )->first();
                $variableSectorial = DB::table('vsectors')->where('nombre_vsector', $fila["clasificacionEmpresa"] )->first();
                $ambito = DB::table('ambits')->where('nombre_ambit', $fila["ambito"] )->first();
                $evento = DB::table('eventos')->where('nombre_evento', $nombreEvento )->first();
                
                
                $solucion-> sipoc_id = $sipoc-> id;   // Id Eslabón de la cadena Productiva
                $solucion-> verbo_solucion = $fila["pverbo"];
                $solucion-> sujeto_solucion = $fila["psujeto"];
                $solucion-> complemento_solucion = $fila["pcomplemento"];
                $solucion-> instrumento_id = $instrumento-> id;
                $solucion-> vsector_id = $variableSectorial-> id ;
                $solucion-> ambit_id = $ambito-> id;
                $solucion-> responsable_solucion = $fila["responsable"];
                $solucion-> corresponsable_solucion = $fila["coresponsables"];

                $solucion-> evento_id =  0;
                $solucion-> lider_mesa_solucion = $liderMesa;
                $solucion-> sistematizador_solucion = $sistematizador;
                $solucion-> provincia_id= $provincia-> id;
                //$solucion-> sector_id= $sector-> id;   
                
                //Hoja -- registros
                $solucion-> coordinador_zonal_solucion= $coordinador;
                
                //quemados
                $solucion-> tipo_fuente= 1;     // 1 = despliegue territorial
                $solucion-> pajustada_id= 0;    // 0 porque esta columna es para consejo consultivo   
                $solucion-> thematic_id= 0;     // 0 porque esta columna es para consejo consultivo 

                $solucion-> problema_validar_solucion = $fila["problematicaValidacion"]; 
                if (!in_array( $fila["problematicaValidacion"] , $arrayValProblemas)) {
                    $solucion-> problema_solucion= $fila["problematica"];
                    array_push($arrayProblemas, $fila["problematica"] );
                    array_push($arrayValProblemas, $fila["problematicaValidacion"] );
                }
                else{
                    $posicion = array_search($fila["problematicaValidacion"], $arrayValProblemas);
                    $solucion-> problema_solucion= $arrayProblemas[$posicion];
                }   
                //$solucion-> save();
                array_push($soluciones, $solucion); 
                $solucionAuxiliar = DB::table('solucions')->where('problema_validar_solucion', $fila["problematicaValidacion"] )->first();
                if( $solucionAuxiliar != null){                        
                    $error = "Fila ". $fila['numFila'].": La problem&aacute;tica: \"".$fila['problematica']."\"  ya se encuentra registrada.";
                    array_push($errores, $error);   
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
            Flash::info("Se han encontrado ". count($informacion2)." soluciones. Haga click en \"Cargar Datos \" para confirmar.");
        }

        $datos = Collection::make($soluciones);
        $errores = Collection::make($errores);

        return view('admin.soluciones.vistaPreviaMesas')->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo, "nombreEvento"=>$nombreEvento]); 
        
    } 


}
