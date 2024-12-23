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
    public function index(Request $request){
        $data = GPS::all();
        $order = $request->input("order");
        $maxHeight = $request->input("maxHeight");
        $minHeight = $request->input("minHeight");
        if($order == "desc"){
            $data = $data->sortByDesc("Time");
        }
        else if ($order == "asc"){
            $data = $data->sortBy("Time");
        }
        if ($minHeight != null){
            $data = $data->where("HeightAboveSeaLevel", ">=", $minHeight);
        }
        if ($maxHeight != null && $maxHeight >= $minHeight){
            $data = $data->where("HeightAboveSeaLevel", "<=", $maxHeight);
        }
        return GPSResource::collection($data);
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
