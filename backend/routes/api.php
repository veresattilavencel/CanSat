<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanSatController;

Route::get('/gps', [CanSatController::class, "index"])->name("index");
Route::get('/barometicsensor', [CanSatController::class, "barometicsensor"])->name("barometicsensor");
Route::get('/gyroscope', [CanSatController::class, "gyroscope"])->name("gyroscope");
Route::get('/lightintensity', [CanSatController::class, "lightintensity"])->name("lightintensity");
Route::get('/sensirionsps30', [CanSatController::class, "sensirionsps30"])->name("sensirionsps30");
Route::post('/gps', [CanSatController::class, "storeGPS"])->name("gps.store");
Route::post('/barometicsensor', [CanSatController::class, "storeBarometicSensor"])->name("barometicsensor.store");
Route::post('/gyroscope', [CanSatController::class, "storeGyroscope"])->name("gyroscope.store");
Route::post('/lightintensity', [CanSatController::class, "storeLightIntensity"])->name("lightintensity.store");
Route::post('/sensirionsps30', [CanSatController::class, "storeSensirionSps30"])->name("sensirionsps30.store");

