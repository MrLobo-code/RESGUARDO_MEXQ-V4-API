<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "equipo";

    protected $fillable = [
        // 'codigo',
        // 'nomina',
        // 'phone',
        // 'name',
        // 'puesto',
        // 'email',
        // 'sucursal',
        // 'planta_depto',
        // 'type',
        // 'status',
        // 'brand',
        // 'model',
        // 'serial_number',
        // 'product_number',
        // 'bill_number',
        // 'fecha',
        // 'provider',
        // 'comments'
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
        'estado',
    ];
}
