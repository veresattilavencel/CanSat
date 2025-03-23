<?php

use App\Http\Controllers\MissionLiveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreFlightController;

Route::apiResource("preflights", PreFlightController::class);
Route::apiResource("missionlives", MissionLiveController::class);
