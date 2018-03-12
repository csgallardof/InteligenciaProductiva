@extends('layouts.cspReportes')

@section('content')

<!-- begin #content -->
        <div id="content" class="content" width="10%">
            <!-- begin breadcrumb -->
            
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-md-12 col-sm-12">
                    <div class="widget widget-stats bg-green-darker">
                        <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                        <div class="stats-info">
                            <h4 class="modal-title">Reportes Consejo Sectorial de la Producción</h4>
                            <p>
                                
                            </p>    
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-md-12">
                    
                    <div class="panel panel-inverse" data-sortable-id="index-5">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                
                            </div>
                            <h4 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nuevo Reporte Hechos CSP</h4>
                        </div>
                        <div class="panel-body">
                            <div class="height-lg" data-scrollbar="true">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        
                                    <a href="/institucion/consejo-sectorial-produccion" class="btn btn-primary pull-right">Regresar</a>
                                    </div>
                                    <hr>
                                    <br>

                                    <form  method="POST" action="/institucion/modificar-reporte-hechos/{{$cspReportesHecho->id}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
              
                                        
                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <label for="fecha_reporte">Fecha de Reporte</label> 
                                                        <input id="fecha_reporte" disabled type="text" name="fecha_reporte" value="{{$cspReportesHecho->fecha_reporte}}">
                                                    </div>
                                                    <div class="col-md-3">
                                                         <label for="institucion_id"></label>   
                                                        <input id="institucion_id"  type="hidden" name="institucion_id" value="{{$usuario_institucion_id}}">    
                                                    </div>
                                                    
                                                </div>
                                                
                                        </div>

                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <label for="tema">Tema</label>
                                                        <input type="text" required name="tema" class="form-control" value="{{$cspReportesHecho->tema}}">       
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                         <label for="fuente">Fuente</label>
                                                         <input type="text" required name="fuente" class="form-control" value="{{$cspReportesHecho->fuente}}">        
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                
                                        </div>
                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                         <label for="lugar">Lugar</label>
                                                         <input type="text" required name="lugar" class="form-control" value="{{$cspReportesHecho->lugar}}">     
                                                    </div>
                                                    <div class="col-md-3">
                                                         <label for="porcentaje_avance">Avance Porcentaje</label>
                                                         <input type="number" required min="0" max="100" name="porcentaje_avance" class="form-control" value="{{$cspReportesHecho->porcentaje_avance}}">     
                                                    </div>
                                                    <div class="col-md-3"></div>

                                                </div>
                                                
                                        
                                        <div class="form-group">
                                            
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-7">
                                                    <label for="descripcion">Descripcion</label>        
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="descripcion" class="pull-right"></div>
                                                </div>
                                            </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                <textarea required class="form-control" id="descripcion" name="descripcion" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()" >{{$cspReportesHecho->descripcion}}</textarea>    
                                                </div>
                                            
                                        </div>
                                        
                                                <div class="from-group">
                                            <div class="row"></div>
                                            
                                        </div>

                                        <div class="form-group ">
                                            
                                            <div class="row">
                                                    
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-4"> 
                                                        
                                                    <label for="lineas_discursivas" class=>Lineas Discursivas</label>
                                                    
                                                    </div>
                                                
                                            </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                <textarea class="form-control" id="lineas_discursivas" name="lineas_discursivas" rows="6" onKeyDown="cuenta()" onKeyUp="cuenta()">{{$cspReportesHecho->lineas_discursivas}}</textarea>
                                                </div>
                                            
                                        </div>    
                                        <div class="from-group">
                                            <div class="row"></div>
                                            
                                        </div>


                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-7">
                                            <label for="anexo">Agregar archivos. (Opcional)</label>
                                            
                                            <input type="file" class="form-control-file" id="anexo" aria-describedby="fileHelp" name="anexo" >

                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div>
                                        </div>            
                                        </div>
                                        <hr>
                                        <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                                        </div>
                                    </form>     

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- end col-8 -->
                
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        @stop
        