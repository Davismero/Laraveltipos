<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    public $timestamps = false;
    protected $table = 'TipoProducto';
    protected $fillable = ['id', 'tipo'];
}
