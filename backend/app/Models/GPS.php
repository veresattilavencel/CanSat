<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPS extends Model
{
    use HasFactory;
    protected $table = "gps";
    protected $fillable = ["Time", "Latitude", "Longitude", "HeightAboveSeaLevel", "SpeedAboveGround"];
}
