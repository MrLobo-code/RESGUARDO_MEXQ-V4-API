<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_user extends Model {
    use HasFactory;
    protected $table = "admin_users";
    protected $filltable = [
        'username',
        'userpassword'
    ];

    public $timestamps = false;
}

