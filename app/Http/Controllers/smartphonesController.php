<?php

namespace App\Http\Controllers;


use App\Models\smartphone;
use Illuminate\Http\Request;

class SmartphonesController extends Controller
{
    public function getSmartphones() {
            
                $smartphones = smartphone::all();
                return response()->json($smartphones, 200);
            
    }
    public function createSmartphone(Request $request)
    {
        $campos = $request;

        $new_smartphone = new smartphone;
        $new_smartphone->codigo = $campos->codigo;
        $new_smartphone->nomina = $campos->nomina;
        $new_smartphone->nombre = $campos->nombre;
        $new_smartphone->sucursal = $campos->sucursal;
        $new_smartphone->area = $campos->area;
        $new_smartphone->marca = $campos->marca;
        $new_smartphone->modelo = $campos->modelo;
        $new_smartphone->imei = $campos->imei;
        $new_smartphone->cuenta_google = $campos->cuenta_google;
        $new_smartphone->numero_tel = $campos->numero_tel;
        $new_smartphone->fecha = $campos->fecha;
        $new_smartphone->estado = $campos->estado;

        $new_smartphone->save();

        return response()->json(
            [
                'message' => 'Smartphone registrádo !!',
            ],
            200
        );
    }

    public function deleteSmartphone(Request $request, $id)
    {
        $smartphone = smartphone::find($id);
        $smartphone->delete();
        return response()->json(
            [
                'message' => 'Registro eliminado con éxito!!!'
            ],
            200
        );
    }

    public function updateSmartphone(Request $request, $id) {
        $smartphone = smartphone::find($id);

        $smartphone->codigo =        $request->input('codigo');
        $smartphone->nomina =        $request->input('nomina');
        $smartphone->nombre =        $request->input('nombre');
        $smartphone->sucursal =      $request->input('sucursal');
        $smartphone->area =          $request->input('area');
        $smartphone->marca =         $request->input('marca');
        $smartphone->modelo =        $request->input('modelo');
        $smartphone->imei =          $request->input('imei');
        $smartphone->cuenta_google = $request->input('cuenta_google');
        $smartphone->numero_tel =    $request->input('numero_tel');
        $smartphone->fecha =         $request->input('fecha');
        $smartphone->estado =        $request->input('estado');

        $smartphone->save();

        return response()->json(
            [
                'message' => 'Registro actualizado!!!',
            ],
            200
        );
    }
}
