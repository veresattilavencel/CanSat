<?php

use App\Http\Controllers\MissionLiveController;
use App\Http\Controllers\PowerSavingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreFlightController;

Route::apiResource("preflights", PreFlightController::class);
Route::apiResource("missionlives", MissionLiveController::class);
Route::apiResource("powersavings", PowerSavingController::class);
