<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use Exception;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }


    /**
     * Esto es una prueba
     *
     *
     */
    public function Inicio($id,$nombre){

        return "hola Mundo $id $nombre";
    }

     /**
     * Esto es una prueba dos,
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function Inicio2($id,$nombre){

        return "hola Mundo 2 $id $nombre";
    }

     /**
     * Esto es una Datos,
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getDatos(){

        $comas = Datos::all();
        return view('form', compact('comas'));

    }


    public function guardarDatos(Request $request)
    {

        $return = ['status' => 200, 'message' => 'Registro guardado', 'data' => ''];

        try {

            $dato = new Datos();
            $dato -> nombre = $request -> nombre;
            $dato -> apellido = $request -> apellido;
            $dato -> direccion = $request -> direccion;
            $dato -> cedula = $request -> cedula;

            $dato -> save();


        } catch (Exception $th) {
            $return['message'] = $th->getMessage() . '|' . $th->getLine();
            $return['status'] = 400;
        }

        return $return;
    }


    public function filtroDato($nombre){

        $return = ['status' => 200, 'message' => 'Ok', 'data' => ''];

        try{
            $dato = new Datos();
            $resultado = $dato::where('nombre',$nombre)->get();
            $return['data'] = $resultado;

        }catch (Exception $th) {
            $return['message'] = $th->getMessage() . '|' . $th->getLine();
            $return['status'] = 400;
        }

        return $return;

    }

    public function filtroDato2($nombre,$id){

        $return = ['status' => 200, 'message' => 'Ok', 'data' => ''];

        try{
            $dato = new Datos();
            $resultado = $dato::where('nombre',$nombre)->where('id',$id)->get();
            $return['data'] = $resultado;

        }catch (Exception $th) {
            $return['message'] = $th->getMessage() . '|' . $th->getLine();
            $return['status'] = 400;
        }

        return $return;
    }

    public function inner2(){

        $return = ['status' => 200, 'message' => 'Ok', 'data' => ''];

        try{
            $dato = new Datos();
            $resultado = $dato::join('municipio','dato.municipioId','=','municipioid')->get();
            $return = $resultado;

        }catch (Exception $th) {
            $return['message'] = $th->getMessage() . '|' . $th->getLine();
            $return['status'] = 400;
        }

        return $return;
    }

}
