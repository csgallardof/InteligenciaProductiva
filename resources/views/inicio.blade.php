@extends('layouts.main')

@section('title', 'Home')

@section('start_css')
  @parent
@endsection

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
                                  <form method="GET" action="{{ route('nuevaBusqueda2') }}" id="searchForm" class="search-home input-group">
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
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/indice.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">ÍNDICE</h3>
                            <p class="home_iconos_text_2">DE COMPETITIVIDAD</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/vocaciones.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">VOCACIONES</h3>
                            <p class="home_iconos_text_2">PRODUCTIVAS</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/biblioteca.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">BIBLIOTECA</h3>
                            <p class="home_iconos_text_2">ESTUDIOS</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/inversiones.png') }}"></a>
                          <div class="text-block2 img-over text-center">
                            <h3 class="home_iconos_text_1">INVERSIONES</h3>
                            <p class="home_iconos_text_2">DE PRODUCTIVIDAD</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 box">
                        <div class="container2 text-center">
                          <a href="/cifras"><img class="home_part1_size_images" src="{{ asset('imagenes/homeiconos/tramites.png') }}"></a>
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

        <!-- begin #team -->
        <!-- <div id="team" class="content team" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">

                <div class="row">

                  <h2 id=""><a href="/cifras-nacionales">Cifras Económicas</a></h2><hr />
                  <p class="site-page-content-paragraph">Texto</p>

                </div>

            </div>

        </div> -->
        <!-- end #team -->

        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <hr class="hr_style1 row-m-b-1"><!-- End Spacing -->
                <!-- begin row -->
                <div class="row">
                    <div class="col-sm-12 twitter-font-size">
                      <a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" href="https://twitter.com/IndustriasEc?ref_src=twsrc%5Etfw">Tweets by IndustriasEc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->

@endsection

@section('end_js')
  @parent

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>
@endsection

@section('init_scripts')

  <script>
      $(document).ready(function() {
          Notification.init();
      });
  </script>

@endsection
