<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table = "transportista";
    protected $guarded = ['id'];
    public $timestamps = false;
    use HasFactory;
    public function contacto()
    {
        return $this->hasOne(Contacto::class, 'id', 'contacto_id');
    }
}
