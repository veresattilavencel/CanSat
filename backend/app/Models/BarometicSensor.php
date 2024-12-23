<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarometicSensor extends Model
{
    use HasFactory;
    protected $table = "barometic_sensor";
    protected $fillable = ["Time", "Pressure", "Temperature", "Altitude"];
}
