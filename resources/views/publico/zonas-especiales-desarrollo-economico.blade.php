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

    <div class="content row main-content">

      <div class="col-sm-3 hidden-xs">
          <div class="menu-lateral-general form-group menuVertical">
            
            <div class="input-group" style="padding-right: 10px;padding-bottom: 10px">
                <input type="text" class="form-control" placeholder="Buscar Menu" id="buscar"/>
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </span>
            </div>
                                                              
                                            
                                        
               <ul class="nav">
                   <li class="has-sub"><a href="#queEsUnazede" class="titulo">1. ¿Qué es una ZEDE? </a> </li>
                   <li class="has-sub"><a href="#propositoZede" class="titulo">2. Propósitos de la ZEDE</a> </li>
                   
                   
                   
                  
                </ul>
        </div>
      </div>

      <div id="costosindustriales" class="col-sm-9 col-xs-12 p-l-0 p-r-30">

                   
        <div class="site-page-content" >
            <h1 id="queEsUnazede">¿Qué es una ZEDE?<a href="#" title=""></a></h1>
            <ul class="site-page-content-list">
            <li>Destino aduanero en espacio delimitado  del territorio nacional para que se asienten nuevas inversiones.<span class="referencia">Art. 34 COPCI</span></li>
            <li>Para su ubicación se consideran condiciones como preservación, potencialidad de cada localidad, infraestructura, servicios básicos y otros. <span class="referencia"> Art. 35 del  COPCI</span></li>
            <li>Orientación exclusiva a la exportación y la sustitución estratégica de importaciones. <span class="referencia"> Art. 36 COPCI</span></li>
            <li>Se otorgan exoneraciones y dispensas tributarias. <span class="referencia"> Art. 34 COPCI</span></li>
            </ul>

            <h2 id="propositoZede">Propósitos de la ZEDE<a href="#" title=""></a></h2>

            <p class="site-page-content-paragraph">
                            <!-- begin row -->
                              <div class="row">
                                <!-- begin col-3 -->
                                <div class="col-md-4 col-sm-6">
                                  <div class="widget widget-stats bg-blue-darker">
                                    <div class="stats-icon"><i class="fa fa-money"></i></div>
                                       <p class="site-page-content-paragraph" align="center">Atraer nuevas inversiones</p>
                                  </div>
                                </div>
                                <!-- end col-3 -->
                                 <!-- begin col-3 -->
                                <div class="col-md-4 col-sm-6">
                                  <div class="widget widget-stats bg-blue">
                                    <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                                      <p class="site-page-content-paragraph" align="center">Sustituir estratégicamente las importaciones</p> 
                                  </div>
                                </div>
                                <!-- end col-3 -->
                                
                                <!-- begin col-3 -->
                                <div class="col-md-4 col-sm-6">
                                  <div class="widget widget-stats bg-blue-darker">
                                    <div class="stats-icon"><i class="fa fa-bus"></i></div>
                                      <p class="site-page-content-paragraph" align="center">Mejorar servicios logísticos y transporte</p>  
                                  </div>
                                </div>
                                <!-- end col-3 -->
                               
                              </div>
                              <!-- end row -->

                              <!-- begin row -->
                              <div class="row">
                                <div class="col-md-2"></div>
                               <!-- begin col-3 -->
                                <div class="col-md-4 col-sm-6">
                                  <div class="widget widget-stats bg-blue">
                                    <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                                      <p class="site-page-content-paragraph" align="center">Promover y estimular las exportaciones de bienes con mayor valor agregado</p>
                                  </div>
                                </div>
                                <!-- end col-3 -->
                                <!-- begin col-3 -->
                                <div class="col-md-4 col-sm-6">
                                  <div class="widget widget-stats bg-blue-darker">
                                    <div class="stats-icon"><i class="fa fa-group"></i></div>
                                      <p class="site-page-content-paragraph" align="center">Establecer nuevos polos de desarrollo, generación de empleo y divisas</p>  
                                  </div>
                                </div>
                                <!-- end col-3 -->
                              </div>
                              <!-- end row -->
            </p>
            <p class="site-page-content-paragraph">All MindSphere Endpoints are secured and can only be reached after a successful authentication. You will then be provided with a token that can be obtained by different ways described in this introduction.
            The token will contain information about what you are allowed to do, e.g. what APIs you are allowed to use.</p>

            <h3>Logging of Tokens</h3><hr />
            <p>Ensure that your production code does not contain any log outputs of secrets like tokens!<code class="code-site-page">authorization</code></p>

            <div class="note note-info site-page-content-alert">
              <h4>Some header text here!</h4>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Maecenas id gravida libero. Etiam semper id sem a ultricies. Donec id consequat magna.
                  Suspendisse tincidunt blandit metus, eu pretium nibh tincidunt eget.
              </p>
            </div>
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


