<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSensor;

class DataSensorController extends Controller
{
    public function mqttCallback(Request $request)
    {
        // Mengambil data dari pesan MQTT
        $data = json_decode($request->getContent(), true);

        // Menyimpan data ke dalam model DataSensor
        DataSensor::create([
            'temperature' => $data['temperature'],
            'humidity' => $data['humidity'],
            'light_intensity' => $data['light']
        ]);

        return response()->json(['message' => 'Data saved successfully']);
    }
}
