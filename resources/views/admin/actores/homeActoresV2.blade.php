@extends('layouts.app')

@section('content')

@section('start_css')
  @parent
    <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

@endsection

@section('content')


        <!-- begin #content -->
        <div id="content" class="content" width="10%">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                            </div>
                            <h3 align="left" class="panel-title">Propuestas de Solución</h3>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Fuente</th>
                                            <th>Soluci&oacute;n</th>
                                            <th>Actor</th>
                                            <th>Responsabilidad</th>
                                            <th>Estado</th>
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($actoresSoluciones as $actorSolucion)
                                        <tr>
                                            <td class="text-justify">
                                                @if($actorSolucion-> tipo_fuente == 1)
                                                    {{ "Mesas Competitivas" }}
                                                @else
                                                    {{ "Consejo Consultivo" }}
                                                @endif
                                            </td>
                                            <td class="text-justify"></td>
                                            <td class="text-justify"></td>
                                            <td class="text-justify"></td>
                                            <td class="text-justify"></td>
                                            <td class="text-justify"></td>
                                            

                                        </tr>
                                        @endforeach                 
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->

                
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

   @stop
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{ asset('plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('plugins/masked-input/masked-input.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('plugins/password-indicator/js/password-indicator.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-combobox/js/bootstrap-combobox.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js') }}"></script>
    <script src="{{ asset('plugins/jquery-tag-it/js/tag-it.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-daterangepicker/moment.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/form-plugins.demo.min.js') }}"></script>
    <script src="{{ asset('js/apps.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
