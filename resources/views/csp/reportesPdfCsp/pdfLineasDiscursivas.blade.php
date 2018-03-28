<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Lineas Discursivas</title>
</head>
<body>
    <div class="row"> 
        <div class="col-md-4"> </div>

        <div class="col-md-8">
                      <div class="box">
                        <div align="center"  >
                            <br><br><img  src="img/logo_mipro.jpg" width="100" height="100" alt="">
                            <br><br>
                            
                          <p style="margin:0; font-family: calibri;color:#2874A6"><strong>HECHOS RELEVANTES DE ALTO IMPACTO COMUNICACIONAL</strong></p>
                          <p style="margin-top:0 ; font-family: calibri"><strong>({{$PeriodoSemanaCspReporte->fecha_inicio}} a {{$PeriodoSemanaCspReporte->fecha_final}})</strong></p><br>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                             <p ALIGN="justify" style="font-family:calibri; margin: 0 0cm 0 1cm"><b>LÍNEAS ARGUMENTALES DE LAS ACCIONES DE HECHOS RELEVANTES DE ALTO IMPACTO COMUNICACIONAL </b> <br></p><br>
                             <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Industrias y Productividad </u></b> <br></p><br>
                              
                              @if(sizeof($data1)==0)
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm; text-transform: uppercase"  ALIGN="justify" >
                            <strong>No existe registros </strong> 
                            </p>
                         @endif   
                           
                            <?php foreach($data1 as $reporteHechoMipro){ ?>
                           
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm ; text-transform: uppercase"  ALIGN="justify" >
                            <strong><?= $reporteHechoMipro->tema; ?></strong><br> <br>
                            
                            
                            @if($reporteHechoMipro->lineas_discursivas==null)
                            no existe registro    
                            @endif                                
                            <?= $reporteHechoMipro->lineas_discursivas; ?>
                            </p>
                            
                            <?php } ?>
                            
                        <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Agricultura y Ganadería</u></b> <br></p><br>

                            @if(sizeof($data3)==0)
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm; text-transform: uppercase"  ALIGN="justify" >
                            <strong>No existe registros </strong> 
                            </p>
                         @endif
                        <?php foreach($data3 as $reporteHechoMAG){ ?>
                            
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm; text-transform: uppercase"  ALIGN="justify" >
                            <strong><?= $reporteHechoMAG->tema; ?></strong><br> <br>
                            
                            @if($reporteHechoMAG->lineas_discursivas==null)
                            no existe registro    
                            @endif
                            <?= $reporteHechoMAG->lineas_discursivas; ?>
                            
                            </p>
                            
                            <?php } ?>                     

                        <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Acuacultura y Pesca </u></b> <br></p><br>
                            @if(sizeof($data2)==0)
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm; text-transform: uppercase"  ALIGN="justify" >
                            <strong>No existe registros </strong> 
                            </p>
                         @endif
                        <?php foreach($data2 as $reporteHechoMAP){ ?>
                            
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm;text-transform: uppercase"  ALIGN="justify" >
                            <strong><?= $reporteHechoMAP->tema; ?></strong><br> <br>
                            
                            @if($reporteHechoMAP->lineas_discursivas==null)
                            no existe registro    
                            @endif
                            <?= $reporteHechoMAP->lineas_discursivas; ?>
                            </p>
                            
                            <?php } ?>

                        <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Secretaría Técnica para el Comité de la Reconstrucción y Reactivación Productiva</u></b> <br></p><br>
                            
                         @if(sizeof($data4)==0)
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm; text-transform: uppercase"  ALIGN="justify" >
                            <strong>No existe registros </strong> 
                            </p>
                         @endif
                        <?php foreach($data4 as $reporteHechoSTR){ ?>
                           
                            <p style="margin: 50px; font-family: calibri;margin: 0 1cm 25 2cm;text-transform: uppercase"  ALIGN="justify" >
                            <strong><?= $reporteHechoSTR->tema; ?></strong><br> <br>
                            
                            @if($reporteHechoSTR->lineas_discursivas==null)
                            no existe registro    
                            @endif
                            <?= $reporteHechoSTR->lineas_discursivas; ?>
                            </p>
                            
                            <?php } ?>
                        </div>
                            
                        
                      

            <p style="margin: 50px; font-family: calibri"  ALIGN="justify" >
                <br><br><br> <br><br>
                <strong>Consolidado por:</strong><br><br><br>
                <strong><u>_______________________________________</u></strong><br>
                <strong >Dr. Claudio Arcos</strong> <br>
                <strong>Secretario AD-HOC del Consejo Sectorial de la Producción</strong>
                <br><br><span>Esta información ha sido obtenida del módulo de Hechos Relevantes y Alertas de la plataforma de Inteligencia Productiva</span>
                <span><br><br>Ministerio de Industrias y Productividad</span>
            </p>
            </div>
       
</body>

</html>
