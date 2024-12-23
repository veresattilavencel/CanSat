<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensirionSps30 extends Model
{
    use HasFactory;
    protected $table = "sensirion_sps30";
    protected $fillable = ["Time", "pm1_concentration", "pm2_5_concentration", "pm10_concentration", "temperature", "humidity", "flow_rate"];
}
