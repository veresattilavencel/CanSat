<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GPSResource;
use App\Http\Resources\BarometicSensorResource;
use App\Http\Resources\GyroscopeResource;
use App\Http\Resources\LightIntensityResource;
use App\Http\Resources\SensirionSps30Resource;
use App\Models\GPS;
use App\Models\BarometicSensor;
use App\Models\Gyroscope;
use App\Models\LightIntensity;
use App\Models\SensirionSps30;
use App\Http\Requests\StoreGPSRequest;
use App\Http\Requests\UpdateGPSRequest;
use App\Http\Requests\StoreBarometicSensorRequest;
use App\Http\Requests\StoreGyroscopeRequest;
use App\Http\Requests\StoreLightIntensityRequest;
use App\Http\Requests\StoreSensirionSps30Request;

class CanSatController extends Controller
{
    public function index(){
        return new GPSResource(GPS::orderBy("Time", "desc")->first());
    }
    public function barometicsensor(){
        return new BarometicSensorResource(BarometicSensor::orderBy("Time", "desc")->first());
    }
    public function gyroscope(){
        return new GyroscopeResource(Gyroscope::orderBy("Time", "desc")->first());
    }
    public function lightintensity(){
        return new LightIntensityResource(LightIntensity::orderBy("Time", "desc")->first());
    }
    public function sensirionsps30(){
        return new SensirionSps30Resource(SensirionSps30::orderBy("Time", "desc")->first());
    }
    public function storeGPS(StoreGPSRequest $request){
        return new GPSResource(GPS::create($request->validated()));
    }
    public function storeBarometicSensor(StoreBarometicSensorRequest $request){
        return new BarometicSensorResource(BarometicSensor::create($request->validated()));
    }
    public function storeGyroscope(StoreGyroscopeRequest $request){
        return new GyroscopeResource(Gyroscope::create($request->validated()));
    }
    public function storeLightIntensity(StoreLightIntensityRequest $request){
        return new LightIntensityResource(LightIntensity::create($request->validated()));
    }
    public function storeSensirionSps30(StoreSensirionSps30Request $request){
        return new SensirionSps30Resource(SensirionSps30::create($request->validated()));
    }
}
