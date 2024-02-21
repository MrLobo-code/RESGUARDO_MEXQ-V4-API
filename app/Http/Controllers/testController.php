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

    // public function editEquipo(testController $request, $slug)
    // public function editEquipo(testController $request, $id)
    // {
    //     // $registro = new equipos;
    //     // $registro = equipos::whereSlug($slug)->firstOrFail();
    //     $registro = equipos::whereSlug($id)->firstOrFail();
    //     $registro->titulo = $request->get('titulo');
    //     $registro->contenido = $request->get('contenido');

    //     if ($request->get('status') != null) {
    //         $registro->status = 0;
    //     } else {
    //         $registro->status = 1;
    //     }
    //     $registro->save();
    //     return redirect(action('testController@edit', $registro->slug))->with('status', 'El mensaje ' . $slug . ' ha sido actualizado');
    // }

    public function createEquipo(Request $request)
    {
        $campos = $request;
        // dd($campos);
        // $valores = explode(' - ', $campos);

        $new_equipo = new equipos;

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
        // $new_equipo->codigo = $campos->codigo;
        // $new_equipo->nomina = $campos->nomina;
        // $new_equipo->phone = $campos->phone;
        // $new_equipo->name = $campos->name;
        // $new_equipo->puesto = $campos->puesto;
        // $new_equipo->email = $campos->email;
        // $new_equipo->sucursal = $campos->sucursal;
        // $new_equipo->planta_depto = $campos->planta_depto;
        // $new_equipo->type = $campos->type;
        // $new_equipo->status = $campos->status;
        // $new_equipo->brand = $campos->brand;
        // $new_equipo->model = $campos->model;
        // $new_equipo->serial_number = $campos->serial_number;
        // $new_equipo->product_number = $campos->product_number;
        // $new_equipo->bill_number = $campos->bill_number;
        // $new_equipo->fecha = $campos->fecha;
        // $new_equipo->provider = $campos->provider;
        // $new_equipo->comments = $campos->comments;

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
        // $new_equipo->update();

        return response()->json(
            [
                'message' => 'Todo Chido padrino !!',
            ],
            200
        );
    }
}
