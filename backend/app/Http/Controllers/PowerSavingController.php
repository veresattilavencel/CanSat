<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePowerSavingRequest;
use App\Http\Requests\UpdatePowerSavingRequest;
use App\Http\Resources\PowerSavingResource;
use App\Models\PowerSaving;

class PowerSavingController extends Controller
{
    public function index()
    {
        return PowerSavingResource::collection(PowerSaving::all());
    }
    public function store(StorePowerSavingRequest $request)
    {
        return new PowerSavingResource(PowerSaving::create($request->validated()));
    }
    public function show(PowerSaving $powerSaving)
    {
        return new PowerSavingResource($powerSaving);
    }
}
