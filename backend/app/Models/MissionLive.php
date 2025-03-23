<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionLive extends Model
{
    use HasFactory;
    protected $fillable = [
        "Time"
        ,"x_Coordinates"
        ,"y_Coordinates"
        ,"pm1_concentration"
        ,"pm2_5_concentration"
        ,"pm4_concentration"
        ,"pm10_concentration"
        ,"nc0_5"
        ,"nc1_0"
        ,"nc2_5"
        ,"nc4_0"
        ,"nc10_0"
        ,"nc10_0"
        ,"typycalParticleSize"
        ,"accelX"
        ,"accelY"
        ,"accelZ"
        ,"magnetometerX"
        ,"magnetometerY"
        ,"magnetometerZ"
        ,"upperTEMTValue"
        ,"bottomTEMTValue"
        ,"temperature"
        ,"pressure"
        ,"networkData1"
        ,"networkData2"
    ];
    public $timestamps = false;
}
