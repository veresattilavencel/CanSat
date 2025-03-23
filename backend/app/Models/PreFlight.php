<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreFlight extends Model
{
    use HasFactory;
    protected $fillable = [
    "Time",
    "x_Coordinates",
    "y_Coordinates",
    "accelZ",
    "temperature",
    "pressure",
    "networkData1",
    "networkData2"
];
}
