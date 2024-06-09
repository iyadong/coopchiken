<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;
use App\Models\DataSensor;

class MqttSubscribe extends Command
{
    protected $signature = 'mqtt:subscribe';
    protected $description = 'Subscribe to MQTT topics';

    public function handle()
    {
        $server = config('mqtt.broker');
        $port = config('mqtt.port');
        $clientId = config('mqtt.client_id');
        $username = config('mqtt.username');
        $password = config('mqtt.password');
        $topics = config('mqtt.topics');

        $connectionSettings = (new ConnectionSettings)
            ->setUsername($username)
            ->setPassword($password);

        $client = new MqttClient($server, $port, $clientId);
        $client->connect($connectionSettings, true);

        foreach ($topics as $topic) {
            $client->subscribe($topic, function (string $topic, string $message) {
                $this->handleMessage($topic, $message);
            }, 0);
        }

        $client->loop(true);
    }

    private function handleMessage(string $topic, string $message)
    {
        $data = json_decode($message, true);
        DataSensor::create([
            'device_id' => $data['device_id'],
            'temperature' => $data['temperature'],
            'humidity' => $data['humidity'],
            'light_intensity' => $data['light_intensity'],
        ]);
    
    }
}
