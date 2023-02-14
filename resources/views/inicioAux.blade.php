<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- BEGIN: Theme CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('css/custom-style.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/themes/dark-layout.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/themes/semi-dark-layout.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.structure.min.css" integrity="sha512-oM24YOsgj1yCDHwW895ZtK7zoDQgscnwkCLXcPUNsTRwoW1T1nDIuwkZq/O6oLYjpuz4DfEDr02Pguu68r4/3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/file-uploaders/dropzone.css')}}">

     <style>
        .header-con{width: 100%; height: 80px; background-color: #ab0033;} 
        /* 727e8c */
        .color-text2{color: white;}
     </style>
</head>
<body>
    
    <div class="header-con">
        <div class="card-header">
            <h4 class="card-title text-center color-text2">CONVOCATORIA SUPER HÉREOS</h4>
        </div>
    </div>
    <br>

    <div class="col-12">
        <div class="card" id="carousel-caption">
            
            <div class="card-content">
            <div class="card-body">
                <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    {{-- <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li> --}}
                    <a href="#registro-con"><li class="active"></li></a>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    {{-- <img class="img-fluid" src="{{asset('images/slider/BANNER-DE-BIENVENIDA.png')}}" alt="First slide"> --}}
                    <img class="img-fluid" src="{{asset('images/slider/banner-con.jpg')}}" alt="First slide">

                    {{-- <div class="card-img-overlay bg-overlay">
                        <div class="carousel-caption d-none d-sm-block">
                        <h3>CONVOCATORIA</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere minima, 
                            perspiciatis tempore soluta similique consequatur, necessitatibus
                                blanditiis exercitationem commodi numquam cumque! Dolorem voluptatum 
                                labore possimus maiores, iusto culpa laboriosam mollitia.
                        </p>
                        </div>
                    </div> --}}
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="col-12" id="registro-con">
        <div class="card">
            <div class="card-content">

            <div class="card-header">
                <h4 class="card-title text-center"><b>FORMULARIO DE REGISTRO</b></h4>
            </div>

            <div class="card-body">
                <form action="#" class="form form-vertical">
                    {{-- @csrf --}}
                    <div class="form-body">
                        <div class="row">
                            
                        <div class="col-6">
                            <div class="form-group">
                                <label for="curp">Curp</label>
                                {{-- value="AAAC980109HTSVGR00" --}}
                                <input type="text" id="curp" class="form-control" name="curp" 
                                placeholder="Curp del alumno" maxlength="18" >
                                {{-- value="{{ old('curp') }}" --}}
                                {!! $errors->first('curp', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <br>
                                {{-- <label for="curp">Curp</label> --}}
                                <button type="button" title="Filtrar por rango de fechas" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                            

                        <div class="col-6">
                            <div class="form-group">
                            <label for="nombre">Nombre</label>
                            {{-- value="{{ old('nombre') }}" value="Cristian Ramiro" --}}
                            <input type="text" id="nombre" class="form-control" name="nombre"
                                placeholder="" maxlength="90" readonly>
                                {!! $errors->first('nombre', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="apellidoPaterno">Apellido paterno</label>
                                {{-- value="{{ old('apellidoPaterno') }}" value="Avalos"--}}
                                <input type="text" id="apellidoPaterno" class="form-control" name="apellidoPaterno" 
                                placeholder="" maxlength="30" readonly >
                                {!! $errors->first('apellidoPaterno', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="apellidoMaterno">Apellido materno</label>
                                {{-- value="{{ old('apellidoMaterno') }}" value="Aguilar"--}}
                                <input type="text" id="apellidoMaterno" class="form-control" name="apellidoMaterno" 
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('apellidoMaterno', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="escuela">Escuela</label>
                                {{-- value="{{ old('escuela') }}" value="Escuela Naciones Unidas"--}}
                                <input type="text" id="escuela" class="form-control" name="escuela" 
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('escuela', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="gradoEscolar">Grado escolar</label>
                                {{-- value="{{ old('gradoEscolar') }}" value="6° grado"--}}
                                <input type="text" id="gradoEscolar" class="form-control" name="gradoEscolar"
                                placeholder="" maxlength="30" readonly > 
                                {!! $errors->first('gradoEscolar', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                {{-- value="{{ old('municipio') }}" value="Victoria"--}}
                                <input type="text" id="municipio" class="form-control" name="municipio"
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('municipio', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono </label>
                                <input type="text" id="telefono" class="form-control" name="telefono" value="{{ old('telefono') }}"
                                placeholder="Teléfono del papá, mamá o persona adulta que considere" maxlength="30">
                                {!! $errors->first('telefono', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" id="direccion" class="form-control" name="direccion" value="{{ old('direccion') }}"
                                placeholder="Dirección de casa" maxlength="120">
                                {!! $errors->first('direccion', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" id="correo" class="form-control" name="correo" value="{{ old('correo') }}"
                                placeholder="Correo electrónico del papá, mamá o persona adulta que considere" maxlength="30">
                                {!! $errors->first('correo', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        
                        <hr style="border: 1px solid #727e8c60" class="col-11">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="nombrePersonaje">Nombre del personaje</label>
                                <input type="text" id="nombrePersonaje" class="form-control" name="nombrePersonaje" value="{{ old('nombrePersonaje') }}"
                                placeholder="Nombre del personaje" maxlength="30">
                                {!! $errors->first('nombrePersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="valoresPersonaje">Valores del superhéroe o superheroína</label>
                                <input type="text" id="valoresPersonaje" class="form-control" name="valoresPersonaje" value="{{ old('valoresPersonaje') }}"
                                placeholder="Valores del personaje" maxlength="90">
                                {!! $errors->first('valoresPersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descripcionPersonaje">Breve descripción del personaje</label>
                                <input type="text" id="descripcionPersonaje" class="form-control" name="descripcionPersonaje" value="{{ old('descripcionPersonaje') }}"
                                placeholder="Breve descripcion del personaje" maxlength="120">
                                {!! $errors->first('descripcionPersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="getFileContrato">Archivo</label>
                                <label for="getFileContrato" class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize"><i class="bx bx-plus"></i>Agregar archivo</label>
                                <input type="file" class="d-none @error('getFileContrato') is-invalid @enderror" id="getFileContrato" name="getFileContrato" value="">
                                {{-- <span style="color: #ab0033;">Archivo cargado</span>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalScrollable">Ver imagen</button> --}}

                            </div>
                        </div>

                        {{-- <div class="row"> --}}
                            {{-- <div class="col-12">
                            <iframe class="col-12" height="1000" src="{{asset('images/dibujos-alumnos/goku.jpg')}}" frameborder="0"></iframe>
                            </div> --}}
                        {{-- </div> --}}
                        
            
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Guardar</button>
                            {{-- <a class="btn btn-light-secondary mr-1 mb-1" href="{{ url()->previous() }}" role="button">Cancelar</a> --}}
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <br><br>
    </div>


    <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-content">
    
              <!--scrolling content Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title white" id="exampleModalScrollableTitle">Archivo</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                      </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                          <iframe class="col-12" height="1000" src="{{asset('images/dibujos-alumnos/goku.jpg')}}" frameborder="0"></iframe>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cerrar</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </div>

</body>
</html>

    <script src="{{asset('js/scripts/modal/components-modal.js')}}"></script>

    <script>
        var input1 =  document.getElementById('telefono');

        input1.addEventListener('input',function(){
        if (this.value.length > 10) 
            this.value = this.value.slice(0,10); 
        })

    </script>

<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>

<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.dataList.js')}}"></script>
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>

<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
  <script src="{{asset('js/scripts/forms/wizard-steps-test.js')}}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
  <script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.19.0/js/md5.min.js" integrity="sha512-8pbzenDolL1l5OPSsoURCx9TEdMFTaeFipASVrMYKhuYtly+k3tcsQYliOEKTmuB1t7yuzAiVo+yd7SJz+ijFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>    
