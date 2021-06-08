<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'banners';

    protected $fillable = [
        'image',
    ];
}
