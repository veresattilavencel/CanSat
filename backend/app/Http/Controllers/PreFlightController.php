<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreFlightRequest;
use App\Http\Resources\PreFlightResource;
use App\Models\PreFlight;

class PreFlightController extends Controller
{
    public function index()
    {
        return PreFlightResource::collection(PreFlight::all());
    }
    public function store(StorePreFlightRequest $request)
    {
        return new PreFlightResource(PreFlight::create($request->validated()));
    }
    public function show(PreFlight $preFlight)
    {
        return new PreFlightResource($preFlight);
    }
}
