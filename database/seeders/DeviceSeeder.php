<?php

namespace Database\Seeders;

use App\ConfigLamp as AppConfigLamp;
use Illuminate\Database\Seeder;
use App\Models\Device;
use App\Models\ConfigLamp;
use App\Models\ConfigHeater;


class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a device
        Device::create([
            'id' => 'A001',
            'user_id' => 1,
            'name' => 'Kandang Ayam umur 1 - 7 hari'
        ]);

        // Create a heater configuration for the device
        ConfigHeater::create([
            'device_id' => 'A001',
            'max_temp' => 29,
            'min_temp' => 10,
        ]);

        // Create a lamp configuration for the device
        ConfigLamp::create([
            'device_id' => 'A001',
            'time_on' => '00:07:00',
            'time_off' => '00:18:00',
        ]);
    }
}
