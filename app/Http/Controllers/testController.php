<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function equipos(Request $request)
    {
        // $equipos = DB::table("equipos")->get();
        // return response()->json($equipos);
        $equipos = equipos::all();
        return response()->json($equipos,200);
    }
}
