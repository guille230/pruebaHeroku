<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iconos extends Model
{
    use HasFactory;

    protected $table = 'iconos';

    protected $fillable = [
        'image',
    ];
}
