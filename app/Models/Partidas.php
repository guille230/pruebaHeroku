<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidas extends Model
{
    use HasFactory;

    protected $table = 'partidas';

    protected $fillable = [
        'nombre',
        'users',
        'max',
        'system',
        'type',
        'duration',
        'creationdate',
        'description',
        'tags'
    ];
}

