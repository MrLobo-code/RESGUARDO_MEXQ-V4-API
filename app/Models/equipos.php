<?php

namespace App\Models;

use App\Http\Controllers\testController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;

    protected $table = "equipos";

    protected $fillable = [
        'id',
        'codigo',
        'nomina',
        'nombre',
        'sucursal',
        'area',
        'marca',
        'modelo',
        'no_serie',
        'fecha',
        'no_factura',
        'proveedor',
        'estado'
    ];

    public $timestamps = false;
}
