<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gyroscope extends Model
{
    use HasFactory;
    protected $table = "gyroscope";
    protected $fillable = ["Time", "x_rotation", "y_rotation", "z_rotation"];
}
