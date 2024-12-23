<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LightIntensity extends Model
{
    use HasFactory;
    protected $table = "light_intensity";
    protected $fillable = ["Time", "Lux"];
}
