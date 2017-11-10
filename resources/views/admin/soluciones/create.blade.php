@extends('layouts.app')

@section('edit_titulo')Registrar @endsection

@section('start_css')
  @parent
  <link href="{{ asset('plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" />

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet" /> 
  <link href="{{ asset('/css/style-responsive.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/css/theme/default.css') }}" rel="stylesheet" id="theme" />

@endsection

@section('edit_titulo')Registrar @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@yield('edit_titulo') Problem&aacute;ticas y Soluciones <a href="{{ route('soluciones.index') }}" class="btn btn-primary pull-right">Regresar</a>
                </div>

                <div class="panel panel-inverse">
                    <div class="panel-body">            
                        <blockquote class="f-s-14">
                            <p>File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.<br>
                            Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br>
                            Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
                        </blockquote>
                        <form id="fileupload" action="{{ url('soluciones/vistaPreviaMesas') }}" method="POST" files="true" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row fileupload-buttonbar">
                                <div class="col-md-7">
                                    <span class="btn btn-success fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span>Agregar</span>
                                        <input type="file" name="archivo" multiple="">
                                    </span>
                                    <button type="reset" class="btn btn-warning cancel">
                                        <i class="fa fa-minus"></i>
                                        <span>Vaciar</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary start">
                                        <i class="fa fa-upload"></i>
                                        <span>Subir</span>
                                    </button>
                                    
                                    <!-- The global file processing state -->
                                    <span class="fileupload-process"></span>
                                </div>
                                <!-- The global progress state -->
                                <div class="col-md-5 fileupload-progress fade">
                                    <!-- The global progress bar -->
                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                    </div>
                                    <!-- The extended global progress state -->
                                    <div class="progress-extended">&nbsp;</div>
                                </div>
                            </div>
                            <!-- The table listing the files available for upload/download -->
                            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                        </form>
                        <div class="note note-info">
                            <h4>Notas</h4>
                            <ul>
                                <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                                <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                                <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('end_js')
  @parent

 
    <!-- The template to display files available for upload -->
    <!--
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    {% if (!i) { %}
                        <button class="btn btn-white btn-sm cancel">
                            <i class="fa fa-ban"></i>
                            <span>Quitar</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
    </script>
    
    <!-- The template to display files available for download -->
    <!--
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
               
            </tr>
        {% } %}
    </script>
    -->
    

    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/vendor/tmpl.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/vendor/load-image.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-process.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-image.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-audio.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-video.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-validate.js') }}"></script>
    <script src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-ui.js') }}"></script>
    <!--[if (gte IE 8)&(lt IE 10)]>
        <script src="assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->
    <script src="{{ asset('js/form-multiple-upload.demo.min.js') }}"></script>
    <script src="{{ asset('js/apps.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            FormMultipleUpload.init();
        });
    </script>


@endsection
