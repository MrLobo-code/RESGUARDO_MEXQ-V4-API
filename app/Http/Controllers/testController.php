<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function equipos(/* Request $request */)
    {
        $equipos = equipos::all();
        return response()->json($equipos, 200);
    }
    public function equipment_details(Request $request)
    {
        try {

            $pc = DB::table('equiposDeComputo')
                ->where('id', $request->segment(3)) //El método segment(3) extraerá el segmento de la URL correspondiente al ID del equipo.
                ->first();
            return response()->json($pc, 200);
        } catch (\Exception $e) {
            return response()->json(['Error' => 'ERROR!!!'], 404);
        }
    }
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

    public function updateEquipo(Request $request)
    {
        $equipo = equipos::find($request->input('id'));

        $equipo->nombre = $request->input('nombre');
        $equipo->nomina = $request->input('nomina');
        $equipo->num_tel = $request->input('num_tel');
        $equipo->puesto = $request->input('puesto');
        $equipo->email = $request->input('email');
        $equipo->sucursal = $request->input('sucursal');
        $equipo->depto = $request->input('depto');
        $equipo->codigo = $request->input('codigo');
        $equipo->area = $request->input('area');
        $equipo->marca = $request->input('marca');
        $equipo->modelo = $request->input('modelo');
        $equipo->no_serie = $request->input('no_serie');
        $equipo->fecha = $request->input('fecha');
        $equipo->no_factura = $request->input('no_factura');
        $equipo->proveedor = $request->input('proveedor');
        $equipo->estado = $request->input('estado');
        $equipo->notas = $request->input('notas');


        $equipo->save();
        return response()->json(
            [
                'message' => 'Registro actualizado!!!',
            ],
            200
        );
    }

    public function deleteEquipo(Request $request, $id)
    {
        $equipo = equipos::find($id);

        $equipo->delete();

        return response()->json(
            [
                'message' => 'Registro eliminado con éxito!!!',
            ],
            200
        );
    }

    public function createEquipo(Request $request)
    {
        $campos = $request;

        $new_equipo = new equipos;
        $new_equipo->nombre = $campos->nombre;
        $new_equipo->nomina = $campos->nomina;
        $new_equipo->num_tel = $campos->num_tel;
        $new_equipo->puesto = $campos->puesto;
        $new_equipo->email = $campos->email;
        $new_equipo->sucursal = $campos->sucursal;
        $new_equipo->depto = $campos->depto;
        $new_equipo->codigo = $campos->codigo;
        $new_equipo->area = $campos->area;
        $new_equipo->marca = $campos->marca;
        $new_equipo->modelo = $campos->modelo;
        $new_equipo->no_serie = $campos->no_serie;
        $new_equipo->fecha = $campos->fecha;
        $new_equipo->no_factura = $campos->no_factura;
        $new_equipo->proveedor = $campos->proveedor;
        $new_equipo->estado = $campos->estado;
        $new_equipo->notas = $campos->notas;

        $new_equipo->save();

        return response()->json(
            [
                'message' => 'Todo Chido padrino !!',
            ],
            200
        );
    }

    public function uploadCard(Request $request)
    {
        try {
            if ($request->hasFile('FileName')) {
                $file = $request->file('FileName');
                $fileName = $file->getClientOriginalName();

                $fileName = pathinfo($fileName, PATHINFO_FILENAME);
                $nameFile = str_replace(" ", "_", $fileName);

                $extension = $file->getClientOriginalExtension();

                $picture =  date('His') . '-' . $nameFile . '.' . $extension;
                $file->move(public_path('signedCards'), $picture); //It stores the files in public\signedCards (C:\xampp\htdocs\laravelAPIs\resguardoMEXQ-V4-API\public\signedCards)

                return response()->json([
                    "message" => "Archivo guardado",
                    "message2" => $picture
                ]);
            } else {
                return response()->json([
                    "message" => "Error al guardar!!!"
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error'], 404);
        }
    }
}
