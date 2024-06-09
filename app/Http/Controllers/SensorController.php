<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MQTTService;

class SensorController extends Controller
{
    protected $mqttService;

    public function __construct(MQTTService $mqttService)
    {
        $this->mqttService = $mqttService;
    }

    public function subscribe()
    {
        $this->mqttService->subscribe('sensor/data'); // Ganti dengan topik MQTT yang sesuai
        return response()->json(['message' => 'Subscribed to MQTT topic']);
    }
}
