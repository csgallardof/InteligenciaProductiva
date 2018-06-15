<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Alertas</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"> </div>

        <div class="col-md-8">
                      <div class="box">
                        <div align="center"  >
                            <br><br><img  src="img/logo_presidencia_2.png" width="150" height="60" alt="">
                            <br><br>

                          <p style="margin:0; font-family: calibri;color:#2874A6"><strong>FICHA DE ALERTAS</strong></p>
                          <p style="margin-top:0 ; font-family: calibri"><strong>CONSEJO SECTORIAL DE LA PRODUCCIÓN<br>
                            @if(!is_null($PeriodoSemanaCspReporte))
                            ({{$PeriodoSemanaCspReporte->fecha_inicio}} a {{$PeriodoSemanaCspReporte->fecha_final}})
                            @endif
                        </strong></p><br>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            @if(sizeof($data1)!=0)
                             <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Industrias y Productividad </u></b> <br></p><br>


                            <?php foreach($data1 as $reporteAlertaMipro){ ?>
                           <div style="margin: 0 1cm 10 2cm">
                            <p style="font-family: calibri;text-align: justify;text-justify: inter-word;" >
                            <strong >Tema: </strong><?= $reporteAlertaMipro->tema; ?><br>

                            <strong>Fuente: </strong><?= $reporteAlertaMipro->fuente;?><br>
                            <strong>Fecha de identificación de la alerta: </strong><?= $reporteAlertaMipro->fecha_atencion; ?><br>

                            <strong>Descripción: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMipro->descripcion))); ?><br>

                            <strong>Riesgo Principal: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMipro->riesgo_principal))); ?><br>

                            <strong>Solución propuesta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMipro->solucion_propuesta))); ?><br>

                            @if($reporteAlertaMipro->acciones!=null)
                            <strong>Acciones emprendidas para solucionar esta alerta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMipro->acciones))); ?><br>
                            @endif

                            </p>
                            </div>
                            <?php } ?>
                            @endif

                            @if(sizeof($data3)!=0)
                            <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Agricultura y Ganadería</u></b> <br></p><br>




                        <?php foreach($data3 as $reporteAlertaMAG){ ?>
                            <div style="margin: 0 1cm 10 2cm">
                            <p style="font-family: calibri;text-align: justify;text-justify: inter-word;" >
                            <strong >Tema: </strong><?= $reporteAlertaMAG->tema; ?><br>

                            <strong>Fuente: </strong><?= $reporteAlertaMAG->fuente;?><br>
                            <strong>Fecha de identificación de la alerta: </strong><?= $reporteAlertaMAG->fecha_atencion; ?><br>

                            <strong>Descripción: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAG->descripcion))); ?><br>

                            <strong>Riesgo Principal: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAG->riesgo_principal))); ?><br>

                            <strong>Solución propuesta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAG->solucion_propuesta))); ?><br>

                            @if($reporteAlertaMAG->acciones!=null)
                            <strong>Acciones emprendidas para solucionar esta alerta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAG->acciones))); ?><br>
                            @endif

                            </p>
                            </div>
                            <?php } ?>

                            @endif

                            @if(sizeof($data2)!=0)
                            <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Acuacultura y Pesca </u></b> <br></p><br>



                             <?php foreach($data2 as $reporteAlertaMAP){ ?>
                            <div style="margin: 0 1cm 10 2cm">
                            <p style="font-family: calibri;text-align: justify;text-justify: inter-word;" >
                            <strong >Tema: </strong><?= $reporteAlertaMAP->tema; ?><br>

                            <strong>Fuente: </strong><?= $reporteAlertaMAP->fuente;?><br>
                            <strong>Fecha de identificación de la alerta: </strong><?= $reporteAlertaMAP->fecha_atencion; ?><br>

                            <strong>Descripción: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAP->descripcion))); ?><br>

                            <strong>Riesgo Principal: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAP->riesgo_principal))); ?><br>

                            <strong>Solución propuesta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAP->solucion_propuesta))); ?><br>

                            @if($reporteAlertaMAP->acciones!=null)
                            <strong>Acciones emprendidas para solucionar esta alerta: </strong>
                            <?php echo ucfirst(strtolower(strip_tags($reporteAlertaMAP->acciones))); ?><br>
                            @endif

                            </p>
                            </div>
                            <?php } ?>
                            @endif


                        </div>




            <p style="margin: 50px; font-family: calibri"  ALIGN="justify" >
                <br><br><br>
                <strong>Consolidado por:</strong><br><br><br>
                <strong><u>_______________________________________</u></strong><br>
                <strong >Sr. Felipe Altamirano</strong> <br>
                <strong>Secretario AD-HOC del Consejo Sectorial de la Producción</strong>
                <br><br><span>Esta información ha sido obtenida del módulo de Hechos Relevantes y Alertas de la plataforma de Inteligencia Productiva</span>
                <span><br><br>Ministerio de Industrias y Productividad</span>
            </p>
            </div>

</body>

</html>
