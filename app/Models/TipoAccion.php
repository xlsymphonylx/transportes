<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAccion extends Model
{
    use HasFactory;
    protected $table = "tipo_accion";
    protected $guarded = ['id'];
    public $timestamps = false;
}
