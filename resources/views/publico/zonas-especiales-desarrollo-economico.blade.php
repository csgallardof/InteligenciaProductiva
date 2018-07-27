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
                                                              
                                            
                                        
               <ul class="nav menu-contenido-varios" >
                   <li class="has-sub"><a href="#queEsUnazede" class="titulo">1. ¿Qué es una ZEDE? </a> </li>
                   <li class="has-sub"><a href="#propositoZede" class="titulo">2. Propósitos de la ZEDE</a> </li>
                   <li class="has-sub"><a href="#incentivosZede" class="titulo">3. ¿Qué incentivos están contemplados?</a> </li>
                   <li class="has-sub"><a href="#integrantesZede" class="titulo">4. ¿Quiénes integran una ZEDE?</a> </li>
                   <li class="has-sub"><a href="#regulaZede" class="titulo">5. ¿Cómo se regulan las ZEDE en el país?</a> </li>
                   <li class="has-sub"><a href="#tipologiasZede" class="titulo">6. Tipologías de ZEDE</a> 
                      <ul class="sub-menu">
                              <li ><a href="#industrial" class="subtitulo">6.1. Industrial</a></li>
                              <li ><a href="#logistica" class="subtitulo">6.2. Logística</a></li>
                              <li ><a href="#tecnologica" class="subtitulo">6.3. Tecnológica</a></li> 
                    </ul>

                   </li>
  
                </ul>
        </div>
      </div>

      <div id="costosindustriales" class="col-sm-9 col-xs-12 p-l-0 p-r-30">

                   
        <div class="site-page-content" >
            <h2>ZONAS ESPECIALES DE DESARROLLO ECONÓMICO</h2><hr>
            <h3 id="queEsUnazede">¿Qué es una ZEDE?</h3><hr>
            <ul class="site-page-content-list">
            <li>Destino aduanero en espacio delimitado  del territorio nacional para que se asienten nuevas inversiones.<span class="referencia">(Art. 34 COPCI)</span></li>
            <li>Para su ubicación se consideran condiciones como preservación, potencialidad de cada localidad, infraestructura, servicios básicos y otros. <span class="referencia">(Art. 35 del  COPCI)</span></li>
            <li>Orientación exclusiva a la exportación y la sustitución estratégica de importaciones. <span class="referencia"> Art. 36 COPCI</span></li>
            <li>Se otorgan exoneraciones y dispensas tributarias. <span class="referencia"> (Art. 34 COPCI)</span></li>
            </ul>

            <h3 id="propositoZede">Propósitos de la ZEDE<a href="#" title=""></a></h3><hr>

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
            <h3 id="incentivosZede">¿Qué incentivos están contemplados?</h3><hr>
            
              <ul class="site-page-content-list">
                  <li>Excepción del pago de aranceles para las mercancías extranjeras que ingresen a dichas zonas para los procesos autorizados.<span class="referencia">(Art. 46 del COPCI)</span></li>
                  <li>Tarifa CERO de IVA a las transferencias e importaciones.<span class="referencia">(Art. 55 LORTI)</span></li>
                  <li>Crédito tributario por el IVA pagado en la compra de materia prima, insumos y servicios del país.<span class="referencia">(Art. 57 LORTI)</span></li>
                  <li>Exoneración del Impuesto a la Salida de Divisas para pagos al exterior por importaciones de bienes y servicios para actividades autorizadas.<span class="referencia">(Art. 159 Ley Reformatoria para la Equidad Tributaria)</span></li>
                  <li>Reducción de 5 puntos porcentuales en la tarifa del Impuesto a la Renta (IR)<span class="referencia">(Artículo innumerado a continuación del Art. 37 del LORTI)</span></li>
              </ul>

            <h3 id="integrantesZede">¿Quiénes integran una ZEDE?</h3> <hr>
             <p class="site-page-content-paragraph">
                    <div class="row">
                      <!-- begin #col-md-4 --><!-- end #col-md-4 -->
                      <div class="col-md-4">
                        <div class="panel panel-primary">
                                <div class="panel-heading bg-blue">
                                  <p  class="site-page-content-paragraph" align="center">
                                    ADMINISTRADORES: <br>
                                     
                                  </p>
                                </div>
                                <div align="center">
                                   <span class="referencia"> (Art. 41 del COPCI) </span>
                                </div>
                                <div class="panel-body ">
                                    <p class="site-page-content-paragraph" align="center">
                                      Son las personas jurídicas públicas, privadas o mixtas, nacionales o extranjeras, cuya función será desarrollar, administrar y controlar las operaciones en la ZEDE.
                                    </p>
                                </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                          <div class="panel panel-primary">

                              <div class="panel-heading bg-blue-darker">
                                <p  class="site-page-content-paragraph " align="center">
                                  OPERADORES: <br>
                                </p>
                                
                              </div>
                              <div  align="center">
                                 <span class="referencia">(Art. 42 del COPCI)</span> 
                              </div>
                              <div class="panel-body ">
                                <p class="site-page-content-paragraph" align="center">
                                  Son las personas naturales o jurídicas, públicas, privadas o mixtas, nacionales o extranjeras, propuestas por la empresa administradora de la ZEDE y calificadas por el CSP, que puedan desarrollar las actividades autorizadas en estas zonas delimitadas del territorio nacional.
                                </p>
                              </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                            <div class="panel panel-primary">

                                <div class="panel-heading bg-blue">
                                  <p class="site-page-content-paragraph" align="center">
                                    SERVICIOS DE APOYO:<br>
                                  </p>
                                </div>
                                <div  align="center">
                                    <span class="referencia">(Art. 44 del COPCI)</span>
                                </div>
                                <div class="panel-body ">
                                  <p class="site-page-content-paragraph" align="center">
                                    Toda persona natural o jurídica, nacional o extranjera que desee establecerse en una ZEDE para brindar servicios de apoyo o soporte a los operadores instalados en la zona autorizada. No participan en el proceso productivo, no gozarán de los incentivos de operar en ZEDE.
                                  </p>
                                </div>
                            </div>
                      </div>
                      <!-- end #col-md-4 -->
                    </div> 

              </p>
  
              <h3 id="regulaZede">¿Cómo se regulan las ZEDE en el país?</h3> <hr>

              <p class="site-page-content-paragraph">
                <div class="row">
                      <!-- begin #col-md-3 -->
                      <div class="col-md-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading bg-blue-darker">
                                  <p  class="site-page-content-paragraph" align="center">
                                    CONSEJO SECTORIAL ECONÓMICO Y PRODUCTIVO                                      
                                  </p>
                                </div>
                                
                                <div class="panel-body ">
                                    <p  class="site-page-content-paragraph" align="center">

                                      1.- Declaratoria de ZEDE                                      
                                    </p>
                                </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                       <!-- begin #col-md-1 -->
                       <div class="col-md-1" align="center">
                                  <br><br><br>
                                  <i class="fa fa-3x fa-arrow-right"></i>    
                         
                       </div>
                        <!-- end #col-md-1 -->
                      <!-- begin #col-md-3 -->
                      <div class="col-md-3">
                          <div class="panel panel-primary">

                              <div class="panel-heading bg-blue">
                                <p  class="site-page-content-paragraph " align="center">
                                  MINISTERIO DE INDUSTRIAS Y PRODUCTIVIDAD (MIPRO) <br>
                                </p>
                                
                              </div>
                              
                              <div class="panel-body ">
                                <p class="site-page-content-paragraph" align="center">
                                  1.- Autorización de Administrador <br>
                                  2.- Calificación de Operadores 

                                </p>
                              </div>
                        </div>
                      </div>
                      <!-- end #col-md-3 -->
                      <!-- begin #col-md-1 -->
                       <div class="col-md-1" align="center">
                                  <br><br><br>
                                  <i class="fa fa-3x fa-arrow-right"></i>    
                         
                       </div>
                        <!-- end #col-md-1 -->
                      <!-- begin #col-md-3 -->
                      <div class="col-md-3">
                            <div class="panel panel-primary">

                                <div class="panel-heading bg-blue-darker">
                                  <p class="site-page-content-paragraph" align="center">
                                    Subsecretaría de Desarrollo Territorial Industrial (MIPRO)<br>
                                  </p>
                                </div>
                               
                                <div class="panel-body ">
                                  <p class="site-page-content-paragraph" align="center">
                                    1.- Difusión de normativa y acompañamiento técnico a la parte interesada <br>
                                    2.- Elaboración de informes técnicos <br>
                                    3.- Control operativo de las ZEDE

                                  </p>
                                </div>
                            </div>
                      </div>
                      <!-- end #col-md-4 -->
                    </div>
              </p>

              <h3 id="tipologiasZede">Tipologías de ZEDE</h3> <hr>
                <h4 id="industrial">Industrial</h4> <hr>
               
                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/industria.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">
                            
                            <p class="site-page-content-paragraph" align="justify">Operaciones de diversificación industrial, Incluye transformación, elaboración y reparación de mercancías de todo tipo de bienes con fines de exportación y de sustitución estratégica de importaciones.</p>
                          </div>
                        </li>
                        
                      </ul>
                  </div>
               
                <h4 id="logistica">Logística</h4> <hr>
                
                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/zede-logistica.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">
                            
                            <p class="site-page-content-paragraph" align="justify">Almacenamientos de carga con fines de consolidación, clasificación, etiquetados, entre otros, manejo de puertos secos o terminales interiores de carga, mantenimiento y reparación de naves, aeronaves o vehículos de transporte terrestre de mercadería. Orientados a potenciar instalaciones físicas de puertos, aeropuertos y pasos de fronteras.</p>
                          </div>
                        </li>
                        
                      </ul>
                  </div>
            

                <h4 id="tecnologica">Tecnológica</h4> <hr>
                
                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/tecnologica.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">
                            
                            <p class="site-page-content-paragraph" align="justify">Se realizan todo tipo de emprendimientos y proyectos de desarrollo tecnológico, innovación electrónica, biodiversidad, mejoramiento ambiental sustentable, entre otros.</p>
                          </div>
                        </li>
                        
                      </ul>
                  </div>
                
                
              <h3> </h3>

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


