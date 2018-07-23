@extends('layouts.main')

@section('title', 'Home')



@section('start_css')
  @parent
@endsection
@push('css')
  <!-- <link href="plugins/nvd3/nvd3.min.css" rel="stylesheet" /> -->
  <style>

#chart svg {
  height: 100%;
}

</style>
@endpush
@section('start_js')
  @parent
@endsection

@section('contenido')

        <!-- begin #about -->
        <div id="about" class="img-responsive background-home content work row-m-t-3 p-t-40" data-scrollview="true">

            <!-- begin container -->
            <div class="container p-t-25" data-animation="true" data-animation-type="fadeInDown">

                <div class="col-md-12 p-t-25 home_main_web_title_image">
                    <div class="panel-body">
                        <img src="{{ asset('imagenes/inteligencia_productiva_home_white.png') }}" class="center-block img-responsive" alt="" width="450px" height="73px">
                    </div>
                </div>

                        <div class="panel-body text-center home_main_web_title">

                                  <div class="row">
                                      <div class="col-xs-8 col-xs-offset-2">
                                          <form method="GET" action="{{ route('nuevaBusquedaInteligencia') }}" id="searchForm" class="search-home input-group">
                                              <div class="input-group-btn search-panel hidden-xs">
                                                  <select name="selectBusqueda" id="tipo_dialogo" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                      <option value="no">Filtrar por tipo de diálogo</option>

                                                      <option value="0">Todas las Mesas</option>
                                                      <option value="2">Consejo Consultivo</option>
                                                      <option value="1">Mesas De Competitividad</option>

                                                  </select>
                                              </div>
                                              <input id="buscar_general" type="text" class="form-control" name="parametro" placeholder="Buscar información sobre propuestas y pedidos del diálogo nacional">
                                              <span class="input-group-btn">
                                                  <button id="btn_buscar" class="btn btn-default" type="submit">
                                                     <text class="hidden-xs">Buscar</text><i class="fa fa-2x fa-search visible-xs"></i>
                                                  </button>
                                              </span>
                                          </form><!-- end form -->
                                      </div><!-- end col-xs-8 -->
                                  </div><!-- end row -->

                          <p style="margin-top: 10px" class="text-white">Ejemplo: Costos de energía electrica, Promoción turística, Consejo Consultivo, Innovaci&oacute;n.</p>
                        </div>

            </div>
        </div>

        <!-- begin #team -->
        <div id="team" class="content team" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <div class="row">
                    <div class="col-12 text-center home_iconos_title"><h2>HERRAMIENTAS <span style="color: #348fe2">PRODUCTIVAS</span></h2></div>
                    <br>

                </div>

                <div class="row">

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/cifras.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">CIFRAS</h3>
                            <p class="home_iconos_text_2">COMPETITIVAS</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/indice"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/indice.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">ÍNDICE</h3>
                            <p class="home_iconos_text_2">DE COMPETITIVIDAD</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/vocaciones"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/vocaciones.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">VOCACIONES</h3>
                            <p class="home_iconos_text_2">PRODUCTIVAS</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="http://servicios.industrias.gob.ec/biblioteca"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/biblioteca.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">BIBLIOTECA</h3>
                            <p class="home_iconos_text_2">ESTUDIOS</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/asociaciones-publico-privadas"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/inversiones.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">INVERSIONES</h3>
                            <p class="home_iconos_text_2">DE PRODUCTIVIDAD</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="http://encuestas.administracionpublica.gob.ec/index.php/887844/lang-es#"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/tramites.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">TRÁMITES</h3>
                            <p class="home_iconos_text_2">SIMPLIFICACIÓN</p>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end #team -->

        <div class="row">
           <div class="container">
              <div class="col-md-12">
                <hr />
                 <div class="twitter-panel twitter-panel-danger">
                    <div class="twitter-panel-heading">
                       <h3 class="twitter-panel-title"><i class="twitter-fa fa fa-twitter-square" aria-hidden="true"></i>
                          Ministerio de Industrias y Productividad - @IndustriasEc
                       </h3>
                    </div>
                    <div class="panel-body">
                       <a class="twitter-timeline" data-lang="es" data-chrome="noheader nofooter noborders transparent" data-height="400" data-theme="light" data-tweet-limit="3" href="https://twitter.com/IndustriasEc?ref_src=twsrc%5Etfw">Tweets by IndustriasEc</a>
                    </div>
                 </div>
              </div>
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
           </div>
        </div>


@endsection

@section('end_js')
  @parent

  <!-- <script src="{{ asset('js/Graficas_Cn_mipro/Cifras_Nacionales_Mipro-inicio.js') }}"></script> -->
  <!-- <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script> -->

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>

@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {
          Notification.init();
          // ChartNvd3.init();
      });

      $(window).on('load', function () {
       $('iframe[id^=twitter-widget-0]').each(function () {
         var head = $(this).contents().find('head');
         $(this).append('<style>#twitter-widget-0 {height: 448.8px !important;}</style>');
         if (head.length) {
           setTimeout(function(){
             head.append('<style>'+
      '.timeline{max-width:100% !important;width:100% !important;}'+
      '.timeline .stream{max-width:none!important;width:100%!important;}'+
      '.timeline-Widget{max-width:100%!important;}'+
      '.timeline-Tweet-media {display:none!important;}'+
      '.SandboxRoot.env-bp-430 .timeline-Tweet-text{font-size:12px; line-height: 13px; } ' +
      '.SandboxRoot.env-bp-550 .timeline-Tweet-text{font-size:12px; line-height: 13px; } ' +
      '.SandboxRoot.env-bp-660 .timeline-Tweet-text{font-size:13px; line-height: 15px; } ' +
      '.SandboxRoot.env-bp-820 .timeline-Tweet-text{font-size:14px; line-height: 18px; } ' +
      '.SandboxRoot.env-bp-970 .timeline-Tweet-text{font-size:15px; line-height: 21px; } ' +
      '.MediaCard-media {max-width:400px;} </style>');}, 20);
         }
       });
      });

</script>

@endsection
