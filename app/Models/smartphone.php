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
        'google_account',
        'num_tel',
        'fecha',
        'estado',
        'notas'
    ];

    public $timestamps = false;
}