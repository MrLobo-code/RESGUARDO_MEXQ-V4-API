<?php

namespace App\Http\Controllers;

use App\Models\googleAccount;
use Illuminate\Http\Request;

class googleAccountsController extends Controller
{
    public function getGoogleAC()
    {
        $googleAc = googleAccount::all();
        return response()->json($googleAc, 200);
    }

    // public function findGoogleAC ($value) {
    //     dd($value);
    //     $gAccount = googleAccount::find($value);
    //     return response()->json($gAccount, 200);
    // }

    public function createGoogleAC(Request $request)
    {
        $campos = $request;

        $newAccount = new googleAccount;
        $newAccount->sucursal = $campos->sucursal;
        $newAccount->cuenta = $campos->cuenta;
        $newAccount->clave = $campos->clave;
        $newAccount->fecha_actualizacion = $campos->fecha_actualizacion;
        $newAccount->notas = $campos->notas;

        $newAccount->save();

        return response()->json(
            [
                'message' => 'Cuenta de Google creada !!'
            ],
            200
        );
    }

    public function updateGoogleAC(Request $request, $id)
    {
        $newAccount = googleAccount::find($id);

        $newAccount->sucursal =             $request->input('sucursal');
        $newAccount->cuenta =               $request->input('cuenta');
        $newAccount->clave =                $request->input('clave');
        $newAccount->fecha_actualizacion =  $request->input('fecha_actualizacion');
        $newAccount->notas =                $request->input('notas');

        $newAccount->save();

        return response()->json(
            [
                'message' => 'Cuenta de Google actualizada con éxtio !!'        
            ],
            200
        );
    }

    public function deleteGoogleAC(Request $request, $id)
    {
        $newAccount = googleAccount::find($id);
        $newAccount->delete();
        return response()->json(
            [
                'message' => 'Cuenta de Google eliminada con éxito !!'
            ],
            200
        );
    }
}
