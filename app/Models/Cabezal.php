<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabezal extends Model
{
    protected $table = "cabezal";
    protected $guarded = ['id'];
    public $timestamps = false;
    use HasFactory;
}
