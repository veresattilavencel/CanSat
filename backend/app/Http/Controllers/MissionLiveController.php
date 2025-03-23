<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMissionLiveRequest;
use App\Http\Resources\MissionLiveResource;
use App\Models\MissionLive;

class MissionLiveController extends Controller
{
    public function index()
    {
        return MissionLiveResource::collection(MissionLive::all());
    }
    public function store(StoreMissionLiveRequest $request)
    {
        return new MissionLiveResource($request->validated());
    }
    public function show(MissionLive $missionLive)
    {
        return new MissionLiveResource($missionLive);
    }
}
