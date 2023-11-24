<?php

namespace App\Http\Controllers;

use App\Models\equipos;
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
}
