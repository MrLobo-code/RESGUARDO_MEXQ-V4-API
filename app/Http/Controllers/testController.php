<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function equipos(Request $request)
    {
        $equipos = equipos::all();
        return response()->json($equipos,200);
    }
}
