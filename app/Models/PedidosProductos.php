<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidosProductos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pedidos_productos';

    protected $fillable = [
        'id_pedidos',
        'id_productos'
    ];
}
