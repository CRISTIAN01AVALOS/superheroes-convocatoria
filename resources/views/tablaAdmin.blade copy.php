@extends('layouts.contentIncludes')
@section('title','Concurso de dibujo')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')

<div class="container-fluid py-4 mt-3">
  @can('ver-administrar') <!--CARDs ADMIN-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Registrados</p>
                <h3 class="font-weight-bolder">
                  {{ $total_registrados }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                  since yesterday
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Seleccionados</p>
                <h3 class="font-weight-bolder">
                {{ $total_seleccionados }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                  since last week
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">No Seleccionados</p>
                <h3 class="font-weight-bolder">
                {{ $total_Noseleccionados }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                  since last quarter
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Evaluados</p>
                <h3 class="font-weight-bolder">  <!-- tenia h5 -->
                {{ $total_evaluados }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endcan
  @can('guardar-evaluar')  <!--CARDs JUEZ-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Por Evaluar</p>
                <h3 class="font-weight-bolder">
                {{ $total_seleccionadosd }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                  since last week
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Evaluados</p>
                <h3 class="font-weight-bolder">  <!-- tenia h5 -->
                {{ $total_evaluados }}
                </h3>
                <!-- <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                </p> -->
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endcan
  @can('guardar-evaluar')
  <div class="row mt-4">
        <div class="d-flex justify-content-between ">
            <h1 class="mb-2 colorTitle">Registros</h1>
        </div>
    </div>
  @endcan
  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb- p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-2">Dibujos a Evaluar</h6>
          </div>
        </div>
        
        <div class="mb-2 p-3">
        
          <button type="button" class="btn colorBtnPrincipal" id="btnFiltros">Filtros</button>
          <div class="row" id="pnFiltros">
            <div class="col-2">
              <div class="form-group">
                <select class="form-select" aria-label="Default select example" id="estatus_id" name="estatus_id" onchange="load()">
                  <option value="0" selected>Estatus</option>
                  @foreach($cat_estatus as $estatus_s)
                    <option value="{{ $estatus_s->id_estatus }}">{{ $estatus_s->desc_estatus }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <select class="form-select" aria-label="Default select example" id="estatus_eval_id" name="estatus_eval_id" onchange="load()">
                  <option value="0" selected>Estatus Evaluación</option>
                  @foreach($cat_estatus_eval as $estatus_evalu)
                    <option value="{{ $estatus_evalu->id_estatus_eval }}">{{ $estatus_evalu->desc_estatus_eval }} </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <select class="form-select" aria-label="Default select example" id="municipio_select" name="municipio_select" onchange="load()">
                  <option value="0" selected>Municipio</option>
                  @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->nombre }} </option>
                  @endforeach
                </select>
              </div>
            </div>
            <!-- <div class="col-2"> 
              <div class="form-group">
                <label for="region_select">Región</label>
                <select class="form-select" aria-label="Default select example" id="region_select" name="region_select">
                  <option value="0" selected>Elegir Región</option>
                  @foreach($regiones as $region)
                    <option value="{{ $region->Id_Region }}">{{ $region->Region }} </option>
                  @endforeach
                </select>
              </div>
            </div> -->
            <div class="col-2">
              <div class="form-group">
                <!-- <label for="grado_select">Grado Escolar</label> -->
                <select class="form-select" aria-label="Default select example" id="grado_select" name="grado_select" onchange="load()">
                  <option value="0" selected>Grado</option>
                    <option value="1">1° </option>
                    <option value="2">2° </option>
                    <option value="3">3° </option>
                    <option value="4">4° </option>
                    <option value="5">5° </option>
                    <option value="6">6° </option>
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group align-middle">
                <button type="button" class="btn colorBtnPrincipal" id="btnFiltrar">Filtrar</button>
              </div>
            </div>
            
          <!-- </div> -->
          <div class="row text-end">
          <div class="col-9">
          </div>
            <div class="col-3">
              <!-- <button type="button" class="btn btn-secondary" id="btnCancelarFiltros">Cancelar</button> -->
              <!-- <button type="button" class="btn colorBtnPrincipal" id="btnFiltrar">Filtrar</button> -->
            </div>
          </div>
        </div>
        
        <div class="table-responsive">
          <table class="table align-items-center mb-0" id="tablaListado">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FOLIO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CURP/NOMBRE</th><!--///////-->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CURP</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MUNICIPIO/REGIÓN</th><!--///////-->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MUNICIPIO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">REGIÓN</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CCT/ESCUELA</th><!--///////-->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CCT</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESCUELA</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE DIBUJO</th>
                @if(! auth()->user()->hasRole('Jurado_concurso') ) 
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PUNTAJE</th>
                @endif
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTATUS</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody id="tbListado">
              @if($registros->count() >= 1)
                  @foreach($registros as $registro)
                      <tr >
                          <td class="align-middle text-center text-sm"> {{ $registro->folio }} </td>
                          <td class="mb-0 text-sm"> 
                            <h6 class="mb-0 text-sm">{{ $registro->curp }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $registro->nombre_alumno ." ". $registro->ap_paterno ." ". $registro->ap_materno }}</p>  
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="mb-0 text-sm">{{ $registro->curp }}</p> 
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs text-secondary mb-0">{{ $registro->nombre_alumno ." ". $registro->ap_paterno ." ". $registro->ap_materno }}</p>  
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs font-weight-bold mb-0">{{ $registro->nombre_municipio }}</p>
                            <p class="text-xs text-secondary mb-0">{{ $registro->Region }}</p> 
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs font-weight-bold mb-0">{{ $registro->nombre_municipio }}</p>
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs text-secondary mb-0">{{ $registro->Region }}</p> 
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs font-weight-bold mb-0">{{ $registro->cct }} </p>
                            <p class="text-xs text-secondary mb-0">{{ $registro->nombre_cct  }} </p> 
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs font-weight-bold mb-0">{{ $registro->cct }} </p>
                          </td>
                          <td class="mb-0 text-sm"> 
                            <p class="text-xs text-secondary mb-0">{{ $registro->nombre_cct  }} </p> 
                          </td>
                          <td class="mb-0 text-sm"> 
                            {{ $registro->nombre_personaje }}
                          </td>
                          @if(! auth()->user()->hasRole('Jurado_concurso') )
                          <td class="mb-0 text-sm"> 
                            {{ $registro->total_puntaje }}
                          </td>
                          @endif
                          <td class="text-sm">
                            @if ($registro->estatus_id==1) Registrado
                            @elseif ($registro->estatus_id==2) 
                              @if( auth()->user()->hasRole('Jurado_concurso') )
                                  @if($registro->estatus_eval_id==3)
                                    Por Evaluar
                                  @elseif($registro->estatus_eval_id==1)
                                    En Evaluación
                                  @elseif($registro->estatus_eval_id==2)
                                    Evaluado
                                  @endif
                              @else  {{--/// Si es ADMIN--}}
                                @if($registro->estatus_eval_id==3)
                                  Seleccionado
                                @else
                                  {{--@if($registro->estatus_eval_id==2 && $registro->countEval > 0 && $registro->countEval < 5)--}}
                                  @if( $registro->countEval > 0 && $registro->countEval < 5)
                                    {{--Seleccionado/En Evaluacion--}}
                                    En Evaluacion
                                  {{--@elseif($registro->estatus_eval_id==2 && $registro->countEval == 5 )--}}
                                  @elseif( $registro->countEval == 5 )
                                  {{--Seleccionado/Evaluado--}}
                                  Evaluado
                                  @endif
                                @endif
                              @endif
                            @elseif ($registro->estatus_id==3) No Seleccionado
                            @endif
                        </td>
                        <td class="align-middle">
                          <div class="dropdown btn-group dropstart">
                              <button class="btn btn-link text-secondary mb-0 "
                                  data-bs-toggle="dropdown" id="opciones"
                                   aria-haspopup="true" aria-expanded="false" >
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="opciones1">
                                  <li>
                                      <a  
                                      onclick="fnMostrarInfo('{{ $registro->id_registro_concurso }}',1)" class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          <i class="fas fa-eye"></i> Visualizar
                                      </a>
                                  </li>
                                  @can('revisar-dibujo')
                                    @if( !($registro->estatus_id==2 || $registro->estatus_id==3))
                                      <li>
                                          <a onclick="fnMostrarInfo('{{ $registro->id_registro_concurso }}',2)"  class="dropdown-item"
                                          data-bs-toggle="modal" data-bs-target="#exampleModal">
                                              <i class="fas fa-download"></i> Revisar Dibujo
                                          </a>
                                      </li>
                                    @endif
                                  @endcan
                                  @can('guardar-evaluar')
                                    
                                    @if($registro->estatus_eval_id!=2)
                                      <li>
                                        <a 
                                          onclick="fnEvaluar('{{ $registro->id_registro_concurso }}')"
                                          class="dropdown-item">
                                          <i class="fas fa-edit"></i> Evaluar Dibujo
                                        </a>
                                         
                                      </li>
                                    @endif
                                  @endcan
                                  <li>
                                  <a  href="{{ route('verEvaluacion', ['id' => $registro->id_registro_concurso]) }}"
                                          class="dropdown-item" >
                                          <i class="fas fa-eye"></i> Evaluación de Dibujo
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </td>
                      </tr>
                  @endforeach
              @else
                  <tr >
                      <th colspan="2"> No existen registros </th>
                  </tr>
              @endif
            </tbody>
          </table>
          <div id="divPrueba" class="display:none;">
          <table id="tablaPrueba" class="table table-respnsive">
            <thead><th>FOLIO</th><th>CURP</th><th>MUNICIPIO</th><th>ESCUELA</th><th>NOMBRE PERSONAJE</th>
            </thead>
            <tbody id="tbPrueba">
            </tbody>
            </table>
           
            </div>
            
            <table id="tablaPrueba2" class="table table-respnsive">
              <thead>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FOLIO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CURP/NOMBRE</th><!--///////-->
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CURP</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE</th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MUNICIPIO/REGIÓN</th><!--///////-->
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MUNICIPIO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">REGIÓN</th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CCT/ESCUELA</th><!--///////-->
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CCT</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESCUELA</th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE DIBUJO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PUNTAJE</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTATUS</th>
                <th class="text-secondary opacity-7"></th>
              </thead>
              <tbody >

              </tbody>
            </table>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Alumno</h5> <!--//////DATOS ALUMNO-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body" id="form-registro">
            <form action="{{ route('concurso.revisarDibujo') }}" method="POST"
              class="form form-vertical" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">
                  <div class="col-2 text-start">
                    <label for="curp">CURP:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="curp" class="SinNegrita"></label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="escuela">Escuela:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="escuela" class="SinNegrita"></label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="ap_paterno">Apellido Paterno:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="ap_paterno" class="SinNegrita"></label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="gradoEscolar">Grado Escolar:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="gradoEscolar" class="SinNegrita"></label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="ap_materno">Apellido Materno:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="ap_materno" class="SinNegrita"></label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="nombre_municipio">Municipio:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="nombre_municipio" class="SinNegrita"></label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="nombre_alumno">Nombre:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="nombre_alumno" class="SinNegrita"></label>
                  </div>
                  <div class="col-2 text-start" >
                  </div>
                  <div class="col-4 text-start">
                  </div>

                  <div class="col-2 text-start">
                    <label for="telefono_titular">Teléfono:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="telefono_titular" class="SinNegrita"></label>
                  </div>
                  <div class="col-2 text-start" >
                  </div>
                  <div class="col-4 text-start">
                  </div>

                  <div class="col-2 text-start">
                    <label for="domicilio_casa">Dirección:</label>
                  </div>
                    <div class="col-10 text-start">
                  <label id="domicilio_casa" class="SinNegrita"></label>
                  </div>
                  

                  <div class="col-2 text-start">
                    <label for="correo_titular">Correo:</label>
                  </div>
                    <div class="col-10 text-start">
                  <label id="correo_titular" class="SinNegrita"></label>
                  </div>

                  <hr style="border: 1px solid #727e8c60" class="col-11">  <!--//////DATOS DIBUJO-->

                  <p><h5 class="modal-title">Datos del Dibujo</h5></p>
                  
                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <div class="col-6">
                    <div class="row">
                      <div class="col-4 text-start">
                        <label for="nombre_personaje">Nombre del personaje:</label>
                      </div>
                      <div class="col-8 text-start">
                        <label id="nombre_personaje" class="SinNegrita"></label>
                      </div>

                      <div class="col-4 text-start">
                        <label for="valores_personaje">Valores del superhéroe o superheroína:</label>
                      </div>
                      <div class="col-8 text-start">
                        <label id="valores_personaje" class="SinNegrita"></label>
                      </div>

                      <div class="col-4 text-start">
                        <label for="descripcion_personaje">Breve descripción del personaje:</label>
                      </div>
                      <div class="col-8 text-start text-justify" >
                        <label id="descripcion_personaje" class="SinNegrita"></label>
                      </div>

                      <div class="col-4 text-start">
                        <label for="estatus_text">Estatus:</label>
                      </div>
                      <div class="col-8 text-start text-justify" >
                        <label id="estatus_text" style="color:#ab0033;"></label>
                      </div>
                    </div>
                    <div id="revisarDibujo">
                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <p><h5 class="modal-title">Revisar Dibujo</h5></p>

                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <div class="col-6">
                      <div class="form-group">
                        <label for="estatus_id">Estatus</label>
                        <select class="form-select" aria-label="Default select example" id="estatus_selec_id" name="estatus_selec_id" >
                          <option value="0" selected>Elegir opción</option>
                          @foreach($estatus_select as $estatus_sel)
                            <option value="{{ $estatus_sel->id_estatus_selec }}">{{ $estatus_sel->desc_estatus_selec }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="observaciones">Observaciones</label><label id="msjObli" style="color:red;">(Obligatorio)</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3" value=""></textarea>
                        <input type="hidden" id="hiddenId" name="hiddenId" class="form-control"  value="" >
                      </div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-secondary" id="btnCancelarRev">Cancelar</button>

                        <button  type="button" class="btn btn-primary" id="btnRevisar">Revisar</button>
                        
                    </div>
                  </div>
                  </div>
                  

                  <div class="col-6">
                    <div class="form-group">
                      <!-- <button id="verImagen" type="button" class="btn btn-secondary"
                      onclick="fnMostrarDibujo()">Ver imagen</button>
                      <input type="hidden" id="url_archivo_dibujo"  value="" > -->

                       <!-- data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"  //MODAL IMAGEN-->
                       <input type="hidden" id="url_archivo_dibujo"  value="" >
                       <img id="imagenPrevisualizacion" class="img-fluid"> <!--width="400"-->
                    </div>
                  </div>

                  <!-- <div class="col-12 text-center" id="mostrarDibujo">
                    <div class="form-group" >
                      <div>
                        <img id="imagenPrevisualizacion" width="400">
                      </div>
                      <div>
                        <br>
                        <button id="ocultarImagen" type="button" class="btn btn-secondary" onclick="fnOcultarDibujo()">
                        Ocultar imagen</button>
                      </div>
                    </div>
                  </div> -->

                  <!-- <div id="revisarDibujo">
                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <p><h5 class="modal-title">Revisar Dibujo</h5></p>

                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <div class="col-6">
                      <div class="form-group">
                        <label for="estatus_id">Estatus</label>
                        <select class="form-select" aria-label="Default select example" id="estatus_selec_id" name="estatus_selec_id">
                          <option value="0" selected>Elegir opción</option>
                          @foreach($estatus_select as $estatus_sel)
                            <option value="{{ $estatus_sel->id_estatus_selec }}">{{ $estatus_sel->desc_estatus_selec }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3" value=""></textarea>
                        <input type="hidden" id="hiddenId" name="hiddenId" class="form-control"  value="" >
                      </div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-secondary" id="btnCancelarRev">Cancelar</button>

                        <button  type="button" class="btn btn-primary" id="btnRevisar">Revisar</button>
                        
                    </div>
                  </div> -->

                  <!-- <div id="visualizarNoSeleccionado">
                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <p><h5 class="modal-title">Revisar Dibujo</h5></p>

                    <hr style="border: 1px solid #727e8c60" class="col-11">

                    <div class="col-6">
                      <div class="form-group">
                        <label for="estatus_id">Estatus</label>
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- FIN MODAL CONFIRMACION -->
            <div class="modal fade" id="AceptaRevisionModal" tabindex="-1" aria-labelledby="AceptaRevisionModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="AceptaRevisionModalLabel">Revisar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ¿Esta seguro que desea Revisar este dibujo?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn colorBtnPrincipal">Aceptar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN MODAL CONFIRMACION-->
            </form>
          </div>
      </div>
      <div class="modal-footer" id="modalFooter">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL -->

<!-- MODAL MOSTRAR DIBUJO -->
<div class="col-md-6 col-12">
    <div class="card">
      <div class="card-content">

        <!--scrolling content Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Archivo cargado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </div>
              <div class="modal-body">

                <div class="container">
                  <div class="center">
                    <img id="imagenPrevisualizacion" width="400">
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
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
<!-- FIN MODAL MOSTRAR DIBUJO -->

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- FIN MODAL CANCELAR -->
<div class="modal fade" id="cancelRevisionModal" tabindex="-1" aria-labelledby="cancelRevisionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cancelRevisionModalLabel">Salir de la Revisión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Esta seguro que desea salir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn colorBtnPrincipal" id="btnSalirRev">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL CANCELAR-->

<!-- MODAL ALERTA -->
<div class="modal" tabindex="-1" id="alertaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
        <p>Este dibujo ya fue evaluado.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn colorBtnPrincipal" id="alertaCerrar">Ok</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL ALERTA -->
@endsection

@section('page-scripts')
<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <script src="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->

<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script src="//cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<!-- <script src="//cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script> -->

<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<!-- <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css"> -->

<script>
//   var popover = new bootstrap.Popover(document.querySelector('#example-popover'), {
//   container: 'body'
// })
  var tabla;
  
  function fnMostrarInfo(id_registro_concurso,opc){
    let urlEditar = '{{ route("mostrarInfou", ":id") }}';
      urlEditar = urlEditar.replace(':id', id_registro_concurso);

    $.ajax({
        method: "get",
        url:urlEditar,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:"json",
        beforeSend: function() {
        },
        success:function( data ) {
          //console.log(data);
          $("#curp").text(data.curp);
          $("#nombre_alumno").text(data.nombre_alumno);
          $("#ap_paterno").text(data.ap_paterno);
          $("#ap_materno").text(data.ap_materno);
          $("#escuela").text(data.nombre_cct +" - "+ data.cct);
          $("#gradoEscolar").text(data.grado_alumno +"° "+ data.grupo_alumno );
          $("#nombre_municipio").text(data.nombre_municipio);
          $("#telefono_titular").text(data.telefono_titular);
          $("#domicilio_casa").text(data.domicilio_casa);
          $("#correo_titular").text(data.correo_titular);
          $("#nombre_personaje").text(data.nombre_personaje);
          $("#valores_personaje").text(data.valores_personaje);
          $("#descripcion_personaje").text(data.descripcion_personaje);
          $("#url_archivo_dibujo").val(data.url_archivo_dibujo);
          $("#hiddenId").val(data.id_registro_concurso);

          if(data.estatus_id=='2'){
            $("#estatus_text").text('Seleccionado');
          }else if(data.estatus_id=='3'){
            $("#estatus_text").text('No Seleccionado');
          }

          let imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacion");
          let urlEditar = "{{ asset('dibujos_de_alumnos/:temp') }}";
          urlEditar = urlEditar.replace(':temp', data.url_archivo_dibujo);
          
          imagenPrevisualizacionUp.src = urlEditar;
          
        },
        error:function( data ) {
        },
    });

    if(opc==2){
      $("#revisarDibujo").show();
      $("#modalFooter").hide();
    }else{
      $("#revisarDibujo").hide();
      $("#modalFooter").show();
    }
  }

  function fnMostrarDibujo(){
    let url_dibujo =$("#url_archivo_dibujo").val();

    let imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacion");
    let urlEditar = "{{ asset('dibujos_de_alumnos/:temp') }}";
    urlEditar = urlEditar.replace(':temp', url_dibujo);
    
    imagenPrevisualizacionUp.src = urlEditar;

    $("#mostrarDibujo").show();
  }

  function fnOcultarDibujo(){
    $("#mostrarDibujo").hide();
  }

  function verInfo(){
    console.log('holaaa');
  }

  function fnEvaluar(id_registro_concurso){
    
    let urlEditar = '{{ route("evaluar2", ":id") }}';
    urlEditar = urlEditar.replace(':id', id_registro_concurso);

    let urlEvaluar = '{{ route("evaluar", ":id2") }}';
    urlEvaluar = urlEvaluar.replace(':id2', id_registro_concurso);

    $.ajax({
        method: "get",
        url:urlEditar,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:"json",
        beforeSend: function() {
        },
        success:function( data ) {
          console.log(data.length);

           if(data.length >=1){
            //Swal.fire("Ya ha evaluado este dibujo");
            $("#alertaModal").show();
           }else{
            $(location).attr('href',urlEvaluar);
           }
          
        },
        error:function( data ) {
        },
    });
  }

  function filterSugerenciaRepre(){
    let sugerenciarepresentacion_id_Busqueda = $("#estatus_id option:selected").text();
    $("#tbListado tr").filter(function() {
      $(this).toggle($(this)[0].cells[6].innerText.toLowerCase().indexOf(sugerenciarepresentacion_id_Busqueda.toLowerCase()) > -1)
    });
  }
  var vRol;

  function load(){
    var tipo='GET';
    var tipo2='POST';
    var estatus_id= $('#estatus_id').val();
    var estatus_eval_id= $('#estatus_eval_id').val();
    var municipio_select= $('#municipio_select').val();
    var grado_select= $('#grado_select').val();
    $.ajax({
      url: '{{route("mostrar")}}',
      data:{'estatus_id' : estatus_id,
        'estatus_eval_id' : estatus_eval_id,
        'municipio_select' : municipio_select,
        'grado_select' : grado_select},
      type: tipo,
      dataType: 'json', // added data type
      success: function(data) {
          vRol=data.vRol;
          fntabla(data);
          //alert(data);
      }
    });
  }

  function fntabla(data){
     console.log(data[0])
    if(tabla){
      $('#tablaPrueba2').DataTable().clear().destroy();
    }
    tabla=$('#tablaPrueba2').DataTable({
          data:data[0],
          columns: [
            { data: 'folio' },
            { data: null, render:function(data){
                return '<h6 class="mb-0 text-sm">'+data.curp+'</h6><p class="text-xs text-secondary mb-0">'+data.nombre_alumno+' '+data.ap_paterno+' '+data.ap_materno+'</p>  ';
              }
            },
            { data: null, render:function(data){
                return '<h6 class="mb-0 text-sm">'+data.nombre_municipio+'</h6><p class="text-xs text-secondary mb-0">'+data.Region+'</p>  ';
              }
            },
            { data: null, render:function(data){
                return '<h6 class="mb-0 text-sm">'+data.cct+'</h6><p class="text-xs text-secondary mb-0">'+data.nombre_cct+'</p>  ';
              }
            },
            { data: 'nombre_personaje' },
            { data: 'total_puntaje' },
            { data: null, render:function(data){
                if (data.estatus_id==1){
                  return '<span>Registrado</span>';
                }else if (data.estatus_id==2){
                  if (vRol=="J"){ //juradooooo si es jurado hace esto
                    if (data.estatus_eval_id==3){
                      return '<span>Por Evaluar</span>';
                    }else if (data.estatus_eval_id==1){
                      return '<span>En Evaluación</span>';
                    }else if (data.estatus_eval_id==2){
                      return '<span>Evaluado</span>';
                    }
                  }else{// //si es admin
                    if(data.estatus_eval_id==3){
                      return '<span>Seleccionado</span>';
                    }else{
                        if( data.countEval > 0 && data.countEval < 5){
                          return '<span>En Evaluación</span>';
                        }else if( data.countEval == 5 ){
                          return '<span>Evaluado</span>';
                        }
                    }
                  }
                }else if (data.estatus_id==3){
                  return '<span>No seleccionado</span>';
                }
              }
            },
            { data: null, render:function(data){
              var estatuss='';
              estatuss+= '<div class="dropdown btn-group dropstart">'+
                        '<button class="btn btn-link text-secondary mb-0" data-bs-toggle="dropdown" id="opciones" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-ellipsis-v text-xs"></i></button>'+
                        '<ul class="dropdown-menu" aria-labelledby="opciones1">'+
                        '<li>'+
                        '<a onclick="fnMostrarInfo('+data.id_registro_concurso+',1)" class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-eye"></i> Visualizar</a>'+
                        '</li>';
                            if(vRol=='A'){
                              if( !(data.estatus_id==2 || data.estatus_id==3)){
                                estatuss+=        '<li>'+
                                '<a onclick="fnMostrarInfo('+data.id_registro_concurso+',2)"  class="dropdown-item"          data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-download"></i> Revisar Dibujo </a>'+ '</li>';
                              }
                            }
                            if(vRol=='J'){  
                              if(data.estatus_eval_id!=2){
                       estatuss+=         '<li>'+
                                '<a onclick="fnEvaluar('+data.id_registro_concurso+')" class="dropdown-item"><i class="fas fa-edit"></i> Evaluar Dibujo</a>'+
                                 '</li>';
                              }
                            }
                              estatuss+=       '<li>'+
                            '<a  onclick="fnPrueba('+data.id_registro_concurso+')"class="dropdown-item" ><i class="fas fa-eye"></i> Evaluación de Dibujo</a>'+
                                '</li>'+
                            '</ul>'+
                        '</div>';
                  return estatuss;
              }
            },
          ],
          "language": {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": ">",
                "previous": "<"
            }
        },
        dom: 'Bfrtip', //arriba   //dom: 'lfrtipB', ////abajo
        buttons: [{
        extend: 'excel', //Botón para Excel
        footer: true,
        title: 'Archivo',
        filename: 'Export_File',
        text: '<button class="btn btn-secondary">Excel <i class="fas fa-file-excel"></i></button>', //Aquí es donde generas el botón personalizado
        exportOptions: {
                columns: [0,1,2,3,5,6]
            }
          }],
      });
  }

  function fnPrueba(id_registro_concurso){
    let urlEditar = '{{ route("verEvaluacion", ":id") }}';
        urlEditar = urlEditar.replace(':id', id_registro_concurso);
    window.location.href = urlEditar;
  }

  $(document).ready(function () {
    load();
    $("#pnFiltros").hide();
     $("#divPrueba").hide();
    $("#divPrueba").css("display", "none");
    $("#btnRevisar").prop('disabled', true);
    $('#estatus_selec_id option[value="0"]').attr("selected", true);
    $("#msjObli").hide();
    $("#mostrarDibujo").hide();
    $("#revisarDibujo").hide();
    $("#visualizarNoSeleccionado").hide();

    $('#tablaListado').DataTable({
      "language": {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": ">",
                "previous": "<"
            }
        },
        // dom: 'Bfrtip', //arriba   //dom: 'lfrtipB', ////abajo
        // buttons: [{
        //   action: function ( e, dt, node, config ) {
        //       // Do custom processing
        //       // ...
        //       column = dt.column(1);  // column contains API for column 1
        //       that = this;  // Need `this` in the each loop context for excel button
                
        //       column.data().unique().sort().each( function ( d, j ) {
        //         console.log(d);
        //         column.search(d);
        //         $.fn.dataTable.ext.buttons.excelHtml5.action.call(that, e, dt, node, config);
        //       } );

        //     },
        // extend: 'excel', //Botón para Excel
        // footer: true,
        // title: 'Archivo',
        // filename: 'Export_File',
        // text: '<button class="btn btn-secondary">Excel <i class="fas fa-file-excel"></i></button>', //Aquí es donde generas el botón personalizado
        // exportOptions: {
        //         columns: [0,2,3,5,6,8,9,10,11]
        //     }
        //   }],
    "columnDefs": [
      {
          "targets": [ 2,3,5,6,8,9 ],
          "visible": false,
          // "searchable": false
      }] 
    } );

    $('#estatus_selec_id').on('change', function() {
      

      if(this.value==1){
        $("#btnRevisar").prop('disabled', false);
        $("#msjObli").hide();
      }else if(this.value==2){
        $("#btnRevisar").prop('disabled', true);
        $("#msjObli").show();
      }else{
        $("#btnRevisar").prop('disabled', true);
        $("#msjObli").hide();
      }
    });

    // $("#observaciones").keypress(function(){
    //   if ($('#observaciones').val().length <= 0) {
    //     $("#btnRevisar").prop('disabled', true);
    //   }else{
    //     $("#btnRevisar").prop('disabled', false);
    //   }
    // });

    $('#observaciones').on('change', function() {
      
      if (this.value !="") {
        $("#btnRevisar").prop('disabled', false);
      }else{
        $("#btnRevisar").prop('disabled', true);
      }

    });

  //   $("#observaciones").keydown(function(){
  //     $("#btnRevisar").prop('disabled', false);
  // });
  // $("#observaciones").keyup(function(){
  //   $("#btnRevisar").prop('disabled', true);
  // });

    // $("#observaciones").focus(function(){
    //   $("#btnRevisar").prop('disabled', false);
    // });

    // $("#observaciones").blur(function(){
    //     $("#btnRevisar").prop('disabled', true);
    // });

    $("#btnRevisar").click(function(){
      $("#AceptaRevisionModal").modal("show");
    });

    $("#btnCancelarRev").click(function(){
      $("#cancelRevisionModal").modal("show");
    });

    $("#btnSalirRev").click(function(){
      $('#estatus_selec_id option[value="0"]').attr("selected", true);
      $('#observaciones').val('');
      $("#cancelRevisionModal").modal("hide");
      $("#exampleModal").modal("hide");
    });

    $("#btnFiltros").click(function(){
      $("#pnFiltros").toggle("slow");
      $('#estatus_selec_id option[value="0"]').attr("selected", true);
      $('#observaciones').val('');
      $("#cancelRevisionModal").modal("hide");
      $("#exampleModal").modal("hide");
    });

    $("#alertaCerrar").click(function(){
      $("#alertaModal").hide();
    });

    $("#btnFiltrar").click(function(){
      //  let urlEditar = '{{ route("filtrar", ":id") }}';
      //  urlEditar = urlEditar.replace(':id', id_registro_concurso);
      var est=$("#estatus_id").val();
      var est_e=$("#estatus_eval_id").val();
      var mun=$("#municipio_select").val();
      var grad=$("#grado_select").val();
      var tablita="";
      $.ajax({
          method: "post",
          url:'{{ route("filtrar") }}',
          data:{
            estatus: est,
            estatus_eval: est_e,
            municipio: mun,
            // region:,
            grado: grad,
          },
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          dataType:"json",
          beforeSend: function() {
          },
          success:function( data ) {
            var reg=data.registros2;
            // tablita+="<table><thead><th>FOLIO</th><th>CURP</th><th>MUNICIPIO</th><th>ESCUELA</th><th>NOMBRE PERSONAJE</th></thead>";
            // tablita+="<tbody>";
            for(var i=0;i<reg.length;i++){
              console.log(reg[i]["id_registro_concurso"]);
              tablita+="<tr>";
              tablita+="<td>"+reg[i]["folio"]+"</td>";
              tablita+="<td>"+reg[i]["curp"]+"</td>";
              tablita+="<td>"+reg[i]["nombre_municipio"]+"</td>";
              tablita+="<td>"+reg[i]["nombre_cct"]+"</td>";
              tablita+="<td>"+reg[i]["nombre_personaje"]+"</td>";
              if(reg[i]["estatus_id"]==2){
                tablita+="<td>Seleccionado</td>";
              }
              tablita+="</tr>";
            }
            // tablita+="</tbody>";
            // tablita+="</table>";
             $('#tbPrueba').html(tablita);
            // console.log(tablita);
            window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#divPrueba').html()));
            // e.preventDefault();
          },
          error:function( data ) {
          },
      });

    });

  });

 </script>

@endsection
