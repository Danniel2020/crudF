<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registro;

class ConexionRegistro extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

    }

    public function registro(){

        return Registro::all();
    }


    // public function guardarDatos(Request $request)
    // {

    //     $return = ['status' => 200, 'message' => 'Registro guardado', 'data' => ''];

    //     try {

    //         $Registro = new Registro();
    //         $Registro -> cedula = $request -> cedula;
    //         $Registro -> nombre = $request -> nombre;
    //         $Registro -> apellido = $request -> apellido;
    //         $Registro -> genero = $request -> genero;
    //         $Registro -> telefono = $request -> telefono;
    //         $Registro -> comuna = $request -> comuna;
    //         $Registro -> barrio = $request -> barrio;
    //         $Registro -> direccion = $request -> direccion;
    //         $Registro -> FechaNacimineto = $request -> FechaNacimineto;
    //         $Registro -> municipio = $request -> municipio;
    //         $Registro -> numeroPlanilla = $request -> numeroPlanilla;
    //         $Registro -> correoElectronico = $request -> correoElectronico;
    //         $Registro -> ocupacion = $request -> ocupacion;
    //         $Registro -> digitador = $request -> digitador;


    //         $Registro -> save();


    //     } catch (Exception $th) {
    //         $return['message'] = $th->getMessage() . '|' . $th->getLine();
    //         $return['status'] = 400;
    //     }

    //     return $return;
    // }


    public function innerRegistro(){

        $return = ['status' => 200, 'message' => 'Ok', 'data' => ''];

        try{
            $dato = new registro();
            $resultado = $dato::join('genero','registro.generoId','=','genero.id')
                            -> join('municipio','registro.municipioId', '=', 'municipio.id')
                            ->get();
            $return = $resultado;

        }catch (Exception $th) {
            $return['message'] = $th->getMessage() . '|' . $th->getLine();
            $return['status'] = 400;
        }

        return $return;
    }







}
