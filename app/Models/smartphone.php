<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model {
    use HasFactory;

    protected $table = "smartphones";

    protected $filltable = [
        'codigo',
        'nomina',
        'nombre',
        'sucursal',
        'area',
        'marca',
        'modelo',
        'imei',
        'cuenta_google',
        'numero_tel',
        'fecha',
        'estado'
    ];

    public $timestamps = false;
}