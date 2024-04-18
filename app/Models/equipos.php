<?php

namespace App\Models;

use App\Http\Controllers\testController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;

    // protected $table = "equipos";
    protected $table = "equiposDeComputo";

    protected $fillable = [
        'nombre',
        'nomina',
        'num_tel',
        'puesto',
        'email',
        'sucursal',
        'depto',
        'codigo',
        'area',
        'marca',
        'modelo',
        'no_serie',
        'fecha',
        'no_factura',
        'proveedor',
        'estado',
        'notas',
    ];

    public $timestamps = false;
}
