@extends('layouts.fullLayoutMaster')
{{-- title --}}
{{--  header('Access-Control-Allow-Origin: *');  --}}
@section('title','Concurso de dibujo')

<style>
    .cint-header{
        background-color: #ab0033 !important;
    }
</style>

@section('content')
    <div class="header-con">
        {{-- <div class="card-header cint-header">
            <div class="brand-logo"> --}}
                <div class="row cint-header">
                    <div class="col-6 d-flex justify-content-first">
                        <img src="{{asset('images/logo/logoTamaulipas2022bb.png')}}" alt="Logo Tamaulipas" class="logo" height="70" width="190">
                    </div>
                    
                    <div class="col-6 d-flex justify-content-end" style="padding-top: 12px;">
                        <button type="button" class="btn btn-info mr-1 mb-1">Acceder</button>
                    </div>
                </div>
            {{-- </div>
        </div> --}}
    </div>
    <br>

    <div class="col-12">
        <div class="card" id="carousel-caption">
            
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-first">
                            <a class="btn btn-primary mr-1 mb-1 sm" href="{{ url()->previous() }}" role="button">Regresar</a>                        
                        </div>
                        
                        {{-- <div class="col-7 d-flex justify-content-first" style="padding-top: 12px;">
                            <h4>Bases del concurso</h4>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-1">
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card-content">
                        <div class="card-body">

                            <h4 class="card-title text-center"> <b> BASES DEL CONCURSO </b> </h4>

                            <p class="card-text text-justify">
                            <b>1. </b> Podr??n  participar  todos  los  ni??os  y  ni??as  de  Nivel  Primaria  y  Centros  de  Atenci??n  M??ltiple 
                                residentes en Tamaulipas. <br>
                            </p>

                            <p class="card-text text-justify">
                                <b>2. </b> El  concurso  se  divide  por  regiones,  es  decir,  habr??  un(a)  ganador(a)  por  cada  una  de  las  seis 
                                regiones de Tamaulipas:
                                <ul>
                                    <li>Regi??n  fronteriza  (Nuevo  Laredo,  Guerrero,  Mier,  Miguel  Alem??n,  Camargo,  Gustavo  D??az 
                                        Ordaz, Reynosa, R??o Bravo, Valle Hermoso y Matamoros). </li>
                                    <li>Regi??n Valle de San Fernando (M??ndez, Burgos, Cruillas y San Fernando).</li>
                                    <li>Regi??n Centro (Abasolo, G????mez, Hidalgo, Jim??nez, Mainero, Padilla, San Carlos, San Nicol??s, 
                                        Soto la Marina, Victoria, Villa de Casas y Villagr??n).</li>
                                    <li>Regi??n Sur (Gonz??lez, Aldama, Altamira, Tampico y Madero).</li>
                                    <li>Regi??n  El  Mante  (Nuevo  Morelos,  Antiguo  Morelos,  Mante,  Xicot??ncatl,  Ocampo,  Llera  y 
                                        G??mez Far??as).</li>
                                    <li>Regi??n Altiplano (Jaumave, Miquihuana, Palmillas, Bustamante y Tula).</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>3. </b> Aspectos a evaluar de la obra:
                                <ul>
                                    <li>T??cnica.</li>
                                    <li>Representaci??n de la regi??n.</li>
                                    <li>Descripci??n breve del personaje.</li>
                                    <li>Que incluya al menos un valor de la Nueva Escuela Mexicana (un p??rrafo).</li>
                                    <li>Originalidad.</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>4. </b>Cada participante podr?? inscribir un solo dibujo, de autor??a propia e in??dito, el cual no debe haber 
                                participado en otros cert??menes.
                            </p>

                            <p class="card-text text-justify">
                                <b>5. </b>La fecha de recepci??n de los trabajos ser?? <b>hasta el lunes 20 de marzo del 2023</b>. Participar??n 
                                en el concurso aquellos dibujos que  hayan sido recibidos o tengan una fecha de env??o que  no 
                                exceda el l??mite del d??a de recepci??n. No se tomar??n en cuenta los dibujos que no se sujeten a las 
                                bases del concurso.
                            </p>

                            <p class="card-text text-justify">
                                <b>6. </b>El dibujo debe ser elaborado en hoja de m??quina, tama??o carta.
                            </p>

                            <p class="card-text text-justify">
                                <b>7. </b>La ilustraci??n debe estar hecha a mano y en t??cnica libre. Se puede utilizar l??piz, grafito, carb??n, 
                                pasteles, l??pices de colores, t??cnicas a blanco y negro, crayones, u otros materiales.
                            </p>

                            <p class="card-text text-justify">
                                <b>8. </b>Ser??n rechazados los dibujos que hagan uso de personajes o im??genes de la televisi??n, del cine, 
                                historietas,  revistas,  logotipos,  marcas,  emblemas  comerciales  o  pol??ticos.  No  se  aceptar??n 
                                elementos b??licos en el dibujo.
                            </p>

                            <p class="card-text text-justify">
                                <b>9. </b>El  dibujo  deber??  ser  digitalizado  a  trav??s  de  una  fotograf??a  o  escaneo  (alta  calidad  y  bien 
                                iluminada) y enviado como archivo adjunto. Consulta la p??gina web:
                                <a href="https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/">https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/</a>
                            </p>

                            <p class="card-text text-justify">
                                <b>10. </b>En el cuerpo del dibujo se deber?? precisar la siguiente informaci??n:
                                <ul>
                                    <li>Nombre de autor(a).</li>
                                    <li>Nombre del personaje.</li>
                                    <li>Valores de la Nueva Escuela Mexicana que promueve.</li>
                                    <li>Descripci??n breve del personaje.</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>11. </b>Los y las participantes deber??n conservar en buen estado su dibujo, ya que, en caso de ganar, se 
                                solicitar?? el documento original. 
                            </p>

                            <p class="card-text text-justify">
                                <b>12. </b>Por cada una de las seis regiones, se elegir?? un dibujo ganador. Cada ni??o y ni??a que gane, se le 
                                otorgar?? reconocimiento.
                            </p>

                            <p class="card-text text-justify">
                                <b>13. </b>Los y las concursantes no podr??n ser familiares del Comit?? Organizador o de los y las integrantes 
                                del jurado.
                            </p>

                            <p class="card-text text-justify">
                                <b>14. </b>Todos los trabajos ser??n propiedad del Gobierno de Tamaulipas y la Secretar??a de Educaci??n de 
                                Tamaulipas y consecuentemente propietarias de los derechos de autor. Estas instituciones ser??n 
                                propietarias  de  los  derechos  de  autor  y  en  caso  de  publicar  los  trabajos,  se  reconocer??n  a  sus 
                                autores y se dar??n los cr??ditos de la obra.
                            </p>

                            <p class="card-text text-justify">
                                <b>15. </b>Todos los participantes del presente concurso reconocen y aceptan los t??rminos asentados en 
                                esta Convocatoria.
                                <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead class="thead-dark">
                                         <tr>
                                            <th>ACTIVIDAD</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <tr>
                                        <td>Fecha l??mite de recepci??n de dibujos</td>
                                        <td>20 de marzo de 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Publicaci??n de ganadores</td>
                                            <td>28 de abril de 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </p>

                            <p class="card-text text-justify">
                                <b>JURADO CALIFICADOR</b> <br>
                                El jurado calificador estar?? integrado por representantes de las siguientes instituciones:
                                <ul>
                                    <li>Secretar??a de Educaci??n de Tamaulipas.</li>
                                    <li>Sistema Nacional del Desarrollo Integral de la Familia (DIF), Tamaulipas.</li>
                                    <li>Instituto Nacional de la Juventud (INJUVE), Tamaulipas.</li>
                                    <li>Sistema de Protecci??n Integral de Ni??as, Ni??os y Adolescentes (SIPINNA), Tamaulipas.</li>
                                </ul>
                                <b>El fallo del jurado ser?? inapelable.</b> Cualquier situaci??n no prevista en la presente Convocatoria ser?? resuelta por el jurado
                            </p>

                            <p class="card-text text-justify">
                                <b>Para dudas o aclaraciones puede escribir al correo:</b> <br>
                                consultadibujaunsuperheroe@set.edu.mx
                            </p>             
                            <br>
                            <p class="card-text text-justify">
                               <b>Convocatoria - Concurso de Dibujo</b> <a href="{{asset('images/convocatoria/ConvocatoriaSuperhe??roes.pdf')}}" download="Convocatoria - Concurso de Dibujo">(Descargar)</a>
                            </p>
                            
                            {{-- <iframe src="{{asset('images/convocatoria/ConvocatoriaSuperhe??roes.pdf')}}" frameborder="0"></iframe> --}}
                            {{-- <iframe type="application/pdf" class="col-12" height='1000' src="{{asset('images/convocatoria/ConvocatoriaSuperhe??roes.pdf')}}" frameborder="0" allowfullscreen webkitallowfullscreen></iframe> --}}
                            {{-- <object data="{{asset('images/convocatoria/ConvocatoriaSuperhe??roes.pdf')}}"
                            width="800"
                            height="800"
                            type="text/html">
                            </object> --}}

                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
{{-- page scripts --}}
@section('page-scripts')

    <script src="{{asset('js/scripts/modal/components-modal.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection