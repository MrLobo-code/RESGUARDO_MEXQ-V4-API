<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;
use App\Models\equipo;

// use Illuminate\Http\Request;

class testController extends Controller
{
    public function equipos(/* Request $request */)
    {
        $equipos = equipos::all();
        return response()->json($equipos, 200);
    }
    // public function saveEquipo()
    // {
    //     $new_equipo = new equipos;
    //     $new_equipo->codigo = "2314";
    //     $new_equipo->nomina = "wasfhsrdhjdtu";
    //     $new_equipo->nombre = "345656";
    //     $new_equipo->sucursal = "wasfhsrdhjdtu";
    //     $new_equipo->area = "3565";
    //     $new_equipo->marca = "wasfhsrdhjdtu";
    //     $new_equipo->modelo = "35757";
    //     $new_equipo->no_serie = "wasfhsrdhjdtu";
    //     $new_equipo->fecha = "35735";
    //     $new_equipo->no_factura = "wasfhsrdhjdtu";
    //     $new_equipo->proveedor = "45678";
    //     $new_equipo->estado = "wasfhsrdhjdtu";
    //     $new_equipo->save();
    // }
    public function saveEquipo()
    {
        $new_equipo = new equipos;
        $new_equipo->fill([
            'codigo' => '111111',
            'nomina' => '222222',
            'nombre' => '3333333',
            'sucursal' => '4444444',
            'area' => '5555555',
            'marca' => '6666666',
            'modelo' => '777777',
            'no_serie' => '88888888',
            'fecha' => '9999999',
            'no_factura' => '10101010',
            'proveedor' => '111111111',
            'estado' => '121212121212',
        ]);
        $new_equipo->save();
    }

    function createEquipo(Request $request)
    {
        $campos = $request->input('campos');

        $valores = explode(' - ', $campos);

        $new_equipo = new equipo;
        // $new_equipo->fill([
        //     'codigo' => $request->codigo,
        //     'nomina' => $request->nomina,
        //     'phone' => $request->phone,
        //     'name' => $request->name,
        //     'puesto' => $request->puesto,
        //     'email' => $request->email,
        //     'sucursal' => $request->sucursal,
        //     'planta_depto' => $request->planta_depto,
        //     'type' => $request->type,
        //     'status' => $request->status,
        //     'brand' => $request->brand,
        //     'model' => $request->model,
        //     'serial_number' => $request->serial_number,
        //     'product_number' => $request->product_number,
        //     'bill_number' => $request->bill_number,
        //     'fecha' => $request->fecha,
        //     'provider' => $request->provider,
        //     'comments' => $request->comments,
        // ]);
        $new_equipo-> codigo = $valores[0];
        $new_equipo-> nomina = $valores[1];
        $new_equipo-> phone = $valores[2];
        $new_equipo-> name = $valores[3];
        $new_equipo-> puesto = $valores[4];
        $new_equipo-> email = $valores[5];
        $new_equipo-> sucursal = $valores[6];
        $new_equipo-> planta_depto = $valores[7];
        $new_equipo-> type = $valores[8];
        $new_equipo-> status = $valores[9];
        $new_equipo-> brand = $valores[10];
        $new_equipo-> model = $valores[11];
        $new_equipo-> serial_number = $valores[12];
        $new_equipo-> product_number = $valores[13];
        $new_equipo-> bill_number = $valores[14];
        $new_equipo-> fecha = $valores[15];
        $new_equipo-> provider = $valores[16];
        $new_equipo-> comments = $valores[17];
        $new_equipo->save();

        return response()->json(
            [
                'message' => 'Todo Chido padrino !!',
            ],
            404
        );
    }
}
