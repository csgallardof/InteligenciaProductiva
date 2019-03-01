@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
    <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

    <style>
        @media print {

          #costosindustriales * {
            visibility: visible;
          }
          #costosindustriales {
            position: absolute;
            left: 0;
            top: 0;
          }
        }
    </style>

@endsection

@section('contenido')

    <div class="content row main-content header-fix-mobile">

      

      <div id="zedes" class="col-sm-10 col-xs-12 p-20">


        <div class="site-page-content" >

            <h1 id="incentivosgenerales">Política de Estado para la Producción</h1><hr>

           
            <p style="text-align: justify;">
              El 12 de septiembre de 2018 se creó el Comité de Política de Estado para la Producción, impulsado por el entonces Ministerio de Industrias y Productividad, con la presencia de los principales Directivos de las Cámaras de la Producción y  Gremios del país. 

              El Comité es el espacio en donde el sector privado, mediante diálogo público privado, presenta propuestas de los sectores productivos. 

              
            </p>
            <h3 id="incentivosgenerales">Objetivo</h3><hr>
            Elaborar Política Productiva con un enfoque integral de cadena de valor.<br>
            El comité se ha instalado en 10 ocasiones en donde se han mostrado los avances.


            <h3 id="incentivossectoriales">Avances de compromisos por Ejes</h3><hr>

            <ul class="site-page-content-list">
              <li><a href="/storage/Politica-Estado-Produccion-Calidad.pptx" target="_blank"><span class="fa fa-download"></span></a> Calidad </li> 
              <li><a href="/storage/Politica-Estado-Produccion-MercadoExterno.pptx" target="_blank"><span class="fa fa-download"></span></a> Mercado Externo </li>
              <li><a href="/storage/Politica-Estado-Produccion-MercadoInterno.pptx" target="_blank"><span class="fa fa-download"></span></a> Mercado Interno </li>
              <li><a href="/storage/Politica-Estado-Produccion-Financiamiento.pptx" target="_blank"><span class="fa fa-download"></span></a> Financiamiento </li>
              <li><a href="/storage/Politica-Estado-Produccion-Emprendimiento.pptx" target="_blank"><span class="fa fa-download"></span></a> Emprendimiento </li>
              <li><a href="/storage/Politica-Estado-Produccion-Innovacion.pptx" target="_blank"><span class="fa fa-download"></span></a> Innovación </li>
              <li><a href="/storage/Politica-Estado-Produccion-Inversiones.pptx" target="_blank"><span class="fa fa-download"></span></a> Inversiones </li>
              <li><a href="/storage/Politica-Estado-Produccion-EntornoProductivo.pptx" target="_blank"><span class="fa fa-download"></span></a> Entorno Productivo </li>
              <li><a href="/storage/Politica-Estado-Produccion-ComprasPublicas.pptx" target="_blank"><span class="fa fa-download"></span></a> Compras Públicas </li>
              <li><a href="/storage/Politica-Estado-Produccion-Diseno.pptx" target="_blank"><span class="fa fa-download"></span></a> Política  de Estado para la  Producción </li>
              <li><a href="/storage/Politica-Estado-Produccion-Comercio.pptx" target="_blank"><span class="fa fa-download"></span></a> Comercio para todos </li>

            </ul>
          <h3 id="incentivosgenerales">Avances en la Política Sectorial</h3><hr>
          <ul class="site-page-content-list">
            <li><a href="/storage/Politica-Estado-Produccion-Lacteo.pptx" target="_blank"><span class="fa fa-download"></span></a> Lácteo</li>
            <li><a href="/storage/Politica-Estado-Produccion-Cacao.pptx" target="_blank"><span class="fa fa-download"></span></a> Cacao y Derivados</li>
            <li><a href="/storage/Politica-Estado-Produccion-Cafe.pptx" target="_blank"><span class="fa fa-download"></span></a> Café soluble</li>
            <li><a href="/storage/Politica-Estado-Produccion-palma.pptx" target="_blank"><span class="fa fa-download"></span></a> Palma Aceitera</li>
            <li><a href="/storage/Politica-Estado-Produccion-ethanol.pptx" target="_blank"><span class="fa fa-download"></span></a> Etanol</li>
            <li><a href="/storage/Politica-Estado-Produccion-atun.pptx" target="_blank"><span class="fa fa-download"></span></a> Atún</li>
            <li><a href="/storage/Politica-Estado-Produccion-plasticos.pptx" target="_blank"><span class="fa fa-download"></span></a> Plásticos</li>
            <li><a href="/storage/Politica-Estado-Produccion-metalico.pptx" target="_blank"><span class="fa fa-download"></span></a> Metalmecánico</li>
            <li><a href="/storage/Politica-Estado-Produccion-textil.pptx" target="_blank"><span class="fa fa-download"></span></a> Textil y Confección</li>
            <li><a href="/storage/Politica-Estado-Produccion-ensamblador.pptx" target="_blank"><span class="fa fa-download"></span></a> Ensamblador (Carrocero)</li>
            <li><a href="/storage/Politica-Estado-Produccion-farmaceutico.pptx" target="_blank"><span class="fa fa-download"></span></a> Farmacéutico</li>

          </ul>
           


       </div>

      </div>

    </div>

@endsection

@section('end_js')
  @parent

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->

  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
  <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <script src="{{ asset('plugins/scrollMonitor/scrollMonitor.js') }}"></script>
  <script src="{{ asset('js/custom-mipro.js' ) }}"></script>
  <script src="{{ asset('js/apps.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Animacion_Enlaces-Internos/animacion_enlaces_internos.js') }}"></script>
  <script src="{{ asset('js/BuscadorMenu/buscadorMenu.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

@endsection

@section('init_scripts')

@endsection
