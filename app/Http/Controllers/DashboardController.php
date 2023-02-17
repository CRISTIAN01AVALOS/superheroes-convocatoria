<?php

namespace App\Http\Controllers;

use App\RegistroConcurso;
use DateTime;
use Exception;
use Illuminate\Database\QueryException;
use SoapClient;
use SoapFault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //ecommerce
    public function dashboardEcommerce(){
        return view('pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics(){
        return view('pages.dashboard-analytics');
    }

    public function inicioCon(){
        return view('inicio');
    }

    public function basesConcurso(){
        return view('bases_concurso');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function guardarRegistro(Request $request){

        $request->validate([
            'curp' => 'required|max:18',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'nombrePersonaje' => 'required',
            'valoresPersonaje' => 'required',
            'descripcionPersonaje' => 'required',
        ]);
        
        $registro = new RegistroConcurso();
        $registro->curp = $request['curp'];
        $registro->nombre_alumno = $request['nombre'];
        $registro->ap_paterno = $request['apellidoPaterno'];
        $registro->ap_materno = $request['apellidoMaterno'];
        $registro->genero_alumno = $request['AluSexo'];
        $registro->cct = $request['clave_cct'];
        $registro->nombre_cct = $request['nombre_cct'];
        $registro->grado_alumno = $request['gradoEscolar2'];
        $registro->grupo_alumno = $request['grupoAlumno'];
        $registro->estatus_alumno = $request['estatusAlumno'];
        $registro->ciclo_escolar = $request['Ciclo_Escolar'];
        $registro->turno = $request['Desc_Turno'];
        $registro->id_municipio = $request['id_cct'];
        $registro->telefono_titular = $request['telefono'];
        $registro->domicilio_casa = $request['direccion'];
        $registro->correo_titular = $request['correo'];
        $registro->nombre_personaje = $request['nombrePersonaje'];
        $registro->valores_personaje = $request['valoresPersonaje'];
        $registro->descripcion_personaje = $request['descripcionPersonaje'];

        try {

            $registro->save();
            $id_registro = $registro->id_registro_concurso;
            if($request->hasFile("getFileDibujo")){
            
                $file=$request->file("getFileDibujo");
                $nombre = "dibujo-".$id_registro.".".$file->guessExtension();
    
                $ruta = public_path("dibujos_de_alumnos/".$nombre);
    
                if($file->guessExtension()=="jpg" || $file->guessExtension()=="png" || $file->guessExtension()=="jpeg"){
                
                    copy($file, $ruta);
                    $fecha_registro = new DateTime(date("Y-m-d"));
                    $update_registro = RegistroConcurso::find($id_registro);
                    $update_registro->folio = $fecha_registro->format("y")."-cd-".$id_registro;
                    $update_registro->url_archivo_dibujo = $nombre;

                    try {

                        echo '<script>';
                        echo 'console.log('. json_encode( "Try" ) .');';
                        echo '</script>';

                        $update_registro->update();
                        return redirect('/')->with('registro', 'Ok');

                    } catch (QueryException  $e) {
                        echo '<script>';
                        echo 'console.log('. json_encode( $e ) .');';
                        echo '</script>';
                        return redirect('/')->with('registro', 'imagenNo');
                        // return redirect('/')->with('message-fail', $e->getMessage());
                    }
                
                }else{
                    return redirect('/')->with('registro', 'imagenNo');
                }
            }

        } catch (QueryException $e) {
            echo '<script>';
            echo 'console.log('. json_encode( $e ) .');';
            echo '</script>';
            return redirect('/')->with('registro', 'No');
        }

    }

    public function buscarAlumno(Request $request){

        $buscar_alumno = RegistroConcurso::where('curp', $request['curpAlumno'])->get();

        if (count($buscar_alumno) > 0) {
            return 1;
        } else {
            return 0;
        }
        
 
    }

    public function search(Request $request){

        // echo '<script>';
        // echo 'console.log('. json_encode( strtoupper($request->input('valor')) ) .');';
        // echo '</script>';

        //$servicio = 'http://sce.tamaulipas.gob.mx/curp_renapoVS/service1.asmx?wsdl';
        // $servicio = 'https://sce.tamaulipas.gob.mx/WS_RENAPO_V2/Consulta_curp.asmx?wsdl';
        $servicio = 'https://escolares-siie.tamaulipas.gob.mx/Datos_Alumno_WS/ws.asmx?WSDL';
        #Curp femenini:  LIRC920503MTSNDN08
        #Curp masculino: MAHE870316HTSRRD01 HEVJ140414HTSRZNA0
        $parametros = array(
                        'CURP' => strtoupper($request->input('valor')),
                        'Id_Valor' => 1,
                        'Cadena' => 'Efd$21giR24'
                    );

        $res = array(
            'error'         => 1,
            'mensaje'       => 'Curp no encontrada',
            'CURP'          => '',
            'AluNombre'       => '',
            'AluApePat'     => '',
            'AluApeMat'     => '', 
            'AluSexo'          => '',
            'Clavecct'   => '',
            'nombrect'   => '',
            'Grado'   => '',
            'Grupo'   => '',
            'Desc_Turno'   => '',
            'MATUTINO'   => '',
            'Estatus'   => '',
            'Ciclo_Escolar'  => ''
        );

        try {
            
            $client         = new SoapClient($servicio);
            $result         = $client->BuscaAlumno_PorCurp_CETE($parametros);
            $xml            = $result->BuscaAlumno_PorCurp_CETEResult;
            
            // echo json_encode( $result );

            if(strlen($xml) == 1871) {

                return  $res;

            } else {
                
                $arrayData = array();

                $xml        = str_replace(array('diffgr:', 'msdata:'), '', $xml);
                $xml        = '<package>'.$xml.'</package>';
                $data       = simplexml_load_string($xml);

                // if ($data == "") {

                //     // return json_decode($data, true);

                // } else {

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://proyectoscete.tamaulipas.gob.mx/insumos/public/municipio-cct/'.json_decode($data, true)[0]['Clavecct']); 
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                    curl_setopt($ch, CURLOPT_HEADER, 0); 
                    $data_municipio = curl_exec($ch); 
                    curl_close($ch); 
                    array_push($arrayData, json_decode($data, true), json_decode($data_municipio, true));
                    return $arrayData;

                // }

            }
            

        } catch(SoapFault $fault){
                    
            return  $res;

        }


    }
}
