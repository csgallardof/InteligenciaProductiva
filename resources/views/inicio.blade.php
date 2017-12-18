@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-front.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-responsive-front.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/theme/default-front.css') }}" id="theme" rel="stylesheet" />
  <link href="{{ asset('css/inteligencia.css') }}" id="theme" rel="stylesheet" />
 

@endsection

@section('contenido')

        <!-- begin #about -->
        <div id="about" class="content row-m-t-3" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">

                <div class="col-12">

                    <div class="brand">
                        <img src="{{ asset('imagenes/inteligencia_productiva_home.png') }}" class="center-block img-responsive" alt="Cinque Terre" width="450px" height="73px">
                    </div>

                    <div class="panel-body">
                        <h4 style="font-style: italic;" class="text-center">Mesas de competitividad en el marco del acuerdo por la producción y el empleo</h4>
                    </div>

                </div>

               {{--  <div class="col-md-12">
                    <div class="panel-body text-center">
                        <a href="#" class="btn btn-warning"></button>
                        <a href="#" class="btn btn-warning"></button>
                    </div>
                </div> --}}
                <div class="col-md-12 row-m-t-minus-25">
                    <div class="panel-body text-center">

                      <a href="/consejoconsultivo" class="btn" style="background-color: #f26f22; color: #FFFFFF"><i class="fa fa-bar-chart pull-left" aria-hidden="true"></i>Consejo Consultivo</a>
                      <a href="/despliegueterritorial" class="btn" style="background-color: #f26f22; color: #FFFFFF"><i class="fa fa-list-ol pull-left" aria-hidden="true"></i>Despliegue Territorial</a>
                    </div>
                </div>
                <div class="col-md-12 row-m-t-minus-25">
                    <div class="panel-body text-center">
                        <a href="/reporte" class="btn" style="background-color: #f26f22; color: #FFFFFF"><i class="fa fa-bar-chart pull-left" aria-hidden="true"></i>Reporte</a>
                    </div>
                    
                </div>

                <div class="col-md-12 row-m-t-minus-25">
                    <div class="panel-body text-center">

                      <a href="/cifras" class="btn btn-inverse"><i class="fa fa-bar-chart pull-left" aria-hidden="true"></i>Cifras</a>
                      <a href="/indice" class="btn btn-inverse"><i class="fa fa-list-ol pull-left" aria-hidden="true"></i>Índice Único de Competitividad</a>
                      <a href="/vocaciones" class="btn btn-inverse"><i class="fa fa-cog pull-left" aria-hidden="true"></i>Vocaciones Productivas</a>
                    </div>
                </div>

                <div class="col-md-12 row-m-t-minus-25">
                    <div class="panel-body text-center">

                      <a href="http://servicios.industrias.gob.ec/biblioteca/" target="_blank" class="btn btn-inverse"><i class="fa fa-book pull-left" aria-hidden="true"></i>Biblioteca</a>
                      <a href="/inversiones" target="_blank" class="btn btn-inverse"><i class="fa fa-book pull-left" aria-hidden="true"></i>Inversiones</a>
                      <a class="btn btn-inverse" href="http://encuestas.administracionpublica.gob.ec/index.php/887844/lang-es" target="_blank" data-toggle="modal"><i class="fa fa-book pull-left"></i>Simplificaci&oacute;n de tr&aacute;mites</a>

                    </div>
                </div>
                <div class="col-md-12 row-m-t-minus-25">
                    <div class="panel-body text-center">

                      <a href="#" target="_blank" class="btn btn-inverse"><i class="fa fa-book pull-left" aria-hidden="true"></i>Top 10 Instituciones</a>
                      <a href="#" target="_blank" class="btn btn-inverse"><i class="fa fa-book pull-left" aria-hidden="true"></i>Top 10 Propuestas de Soluci&oacute;n</a>

                    </div>
                </div>

            </div>

        </div>



        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                
                <hr class="hr_style1 row-m-b-1"><!-- End Spacing -->
                

                <!-- begin row -->
                <div class="row">
                    <div class="col-md-4">
                        <a class="twitter-timeline" data-dnt="true" data-chrome="nofooter" href="https://twitter.com/hashtag/MesasDeCompetitividadEc" data-widget-id="909581797175984133">Tweets sobre #MesasDeCompetitividadEc</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </div>
                    <div class="col-md-8">
                        
                        <div class="row row-space-12">
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/1.jpg') }}" alt="Work 1" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                            <!-- end col-3 -->
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/2.jpg') }}" alt="Work 3" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                            <!-- end col-3 -->
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/3.jpg') }}" alt="Work 5" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                        </div>


                        <div class="row row-space-12">
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/4.jpg') }}" alt="Work 1" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                            <!-- end col-3 -->
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/5.jpg') }}" alt="Work 3" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                            <!-- end col-3 -->
                            <!-- begin col-3 -->
                            <div class="col-md-4">
                                <!-- begin work -->
                                <div class="work">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('imagenes/CCT/6.jpg') }}" alt="Work 5" /></a>
                                    </div>
                                </div>
                                <!-- end work -->
                            </div>
                        </div>


                        
                    </div>
                </div>


            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->

@endsection

@section('end_js')
  @parent
  <script src="{{ asset('js/apps-front.js') }}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>
@endsection

@section('init_scripts')

  <script>
      $(document).ready(function() {
          Notification.init();
      });
  </script>

@endsection
