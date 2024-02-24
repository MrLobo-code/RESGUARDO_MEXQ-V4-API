<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;
use App\Models\equipo;
use Symfony\Component\Console\Input\Input;

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

    public function updateEquipo(Request $request, $id)
    {
        $equipo = equipos::find($id);

        // $equipo->id =         $request->input('id'); 
        $equipo->codigo =     $request->input('codigo');
        $equipo->nomina =     $request->input('nomina');
        $equipo->nombre =     $request->input('nombre');
        $equipo->sucursal =   $request->input('sucursal');
        $equipo->area =       $request->input('area');
        $equipo->marca =      $request->input('marca');
        $equipo->modelo =     $request->input('modelo');
        $equipo->no_serie =   $request->input('no_serie');
        $equipo->fecha =      $request->input('fecha');
        $equipo->no_factura = $request->input('no_factura');
        $equipo->proveedor =  $request->input('proveedor');
        $equipo->estado =     $request->input('estado');


        $equipo->save();
        // return redirect('/update')->with('Succes', 'Equipo actualizado con éxito!!');
        return response()->json(
            [
                'message' => 'Registro actualizado!!!',
            ],
            200
        );
    }

    public function createEquipo(Request $request)
    {
        $campos = $request;
        // dd($campos);
        // $valores = explode(' - ', $campos);

        $new_equipo = new equipos;
        $new_equipo->codigo = $campos->codigo;
        $new_equipo->nomina = $campos->nomina;
        $new_equipo->nombre = $campos->nombre;
        $new_equipo->sucursal = $campos->sucursal;
        $new_equipo->area = $campos->area;
        $new_equipo->marca = $campos->marca;
        $new_equipo->modelo = $campos->modelo;
        $new_equipo->no_serie = $campos->no_serie;
        $new_equipo->fecha = $campos->fecha;
        $new_equipo->no_factura = $campos->no_factura;
        $new_equipo->proveedor = $campos->proveedor;
        $new_equipo->estado = $campos->estado;

        $new_equipo->save();

        return response()->json(
            [
                'message' => 'Todo Chido padrino !!',
            ],
            200
        );
    }
}
