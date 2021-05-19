<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosPartidas extends Model
{
    use HasFactory;

    protected $table = 'usuarios_partidas';

    protected $fillable = [
        'id_usuarios',
        'id_partidas',
    ];
}
