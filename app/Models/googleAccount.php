<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class googleAccount extends Model {
    use HasFactory;

    protected $table = "google_accounts";

    protected $filltable = [
        'sucursal',
        'cuenta',
        'clave',
        'fecha_actualizacion',
        'notas'
    ];

    public $timestamps = false;
}