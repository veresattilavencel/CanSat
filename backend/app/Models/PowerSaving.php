<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerSaving extends Model
{
    use HasFactory;
    protected $fillable = [
        "Time"
        ,"x_Coordinates"
        ,"y_Coordinates"
        ,"networkData1"
        ,"networkData2"
    ];
    public $timestamps = false;
}
