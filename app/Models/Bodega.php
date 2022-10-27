<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    protected $table = "bodega";
    protected $guarded = ['id'];
    public $timestamps = false;
    public function ubicacion()
    {
        return $this->hasOne(Ubicacion::class, 'id', 'ubicacion_id');
    }
}
