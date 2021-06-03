<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuarios extends Model  implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    public $timestamps = false;
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'username',
        'password',
        'email',
        'type',
        'address',
        'cp',
        'age',
        'location',
        'country',
        'iconousado',
        'bannerusado',
        'bio',
        'games',
        'preferences'
    ];
}
