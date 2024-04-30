<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $Card;

    protected $fillable = [
        'FileName',
        // 'path'
    ];

    public $timestamps = false;
}