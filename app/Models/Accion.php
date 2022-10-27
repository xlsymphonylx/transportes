<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;
    protected $table = "accion";
    protected $guarded = ['id'];
    public $timestamps = false;
    public function tipoAccion()
    {
        return $this->hasOne(TipoAccion::class, 'id', 'tipo_accion_id');
    }
    public function cabezal()
    {
        return $this->hasOne(Cabezal::class, 'id', 'cabezal_id');
    }
    public function procedencia()
    {
        return $this->hasOne(Ubicacion::class, 'id', 'procedencia_id');
    }
    public function destino()
    {
        return $this->hasOne(Ubicacion::class, 'id', 'destino_id');
    }
    public function bodega()
    {
        return $this->hasOne(Bodega::class, 'id', 'bodega_destino_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
