<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataSensor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $latestDataSensor = DataSensor::orderBy('created_at', 'desc')->first();
        return view('dashboard.dashboard', compact('latestDataSensor'));
    }

    public function configHeater()
    {
        return view('dashboard.config_heater');
    }

    public function configLamp()
    {
        return view('dashboard.config_lamp');
    }

    public function manageDevice()
    {
        return view('dashboard.manage_devices');
    }

    public function manageUser()
    {
        $users = User::all();
        return view('dashboard.manage_user', compact('users'));
    }
}
