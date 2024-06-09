<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSensor;

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        // Mendapatkan data dari permintaan
        $data = $request->all();

        // Menyimpan data ke dalam database
        DataSensor::create([
            'device_id' => $data['device_id'],
            'temperature' => $data['temperature'],
            'humidity' => $data['humidity'],
            'light_intensity' => $data['light']
        ]);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
}
