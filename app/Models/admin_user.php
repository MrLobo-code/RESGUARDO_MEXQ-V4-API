<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model {
    use HasFactory;
    protected $table = "admin_users";
    protected $filltable = [
        'id',
        'username',
        'pass'
    ];

    public $timestamps = false;
}

