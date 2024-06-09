<?php

namespace App\Http\Controllers\Api;

use App\ConfigLamp as AppConfigLamp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\ConfigHeater;
use App\Models\DataSensor;
use App\Models\ConfigLamp;

class MainController extends Controller
{
    // [Get] configuration from actuator
    public function get_config($deviceId)
    {
        $device = Device::find($deviceId);
        $configHeater = ConfigHeater::where('device_id', $deviceId)->first();
        $configLamp = ConfigLamp::where('device_id', $deviceId)->first();
        return response()->json([
            "status" => "Success",
            "message" => "Config fetched successfully",
            "data" => [
                "device" => $device,
                "heater" => $configHeater,
                "lamp" => $configLamp
            ]
        ], 200);
    }
    
    // [POST] data from sensor
    public function post_data(Request $request, $deviceId)
    {
        try {
            $validated = $request->validate([
                'temperature' => 'required|numeric|between:-50,50',
                'humidity' => 'required|numeric|between:0,100',
                'light_intensity' => 'required|numeric|between:0,100000'
            ]);
            $dataSensor = DataSensor::create([
                'device_id' => $deviceId,
                'temperature' => $request->temperature,
                'humidity' => $request->humidity,
                'light_intensity' => $request->light_intensity,
            ]);
            return response()->json([
                "status" => "Success",
                "message" => "Data successfully created",
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "Error",
                "message" => "Data error",
                "error" => $e->getMessage(),
            ], 400);
        }
    }
}
