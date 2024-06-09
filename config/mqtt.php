<?php

return [
    'broker' => env('MQTT_BROKER', "broker.mqtt-dashboard.com"),
    'port' => env('MQTT_PORT', 1883),
    'client_id' => env('MQTT_CLIENT_ID', 'laravel_client'),
    'username' => env('MQTT_USERNAME', null),
    'password' => env('MQTT_PASSWORD', null),
    'topics' => [
        'sensor/data'
    ],
];
