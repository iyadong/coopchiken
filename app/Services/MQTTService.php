<?php

namespace App\Services;

use Bluerhinos\phpMQTT;

class MQTTService
{
    protected $server = 'broker.hivemq.com'; // Ganti dengan server MQTT yang sesuai
    protected $port = 1883; // Port MQTT
    protected $clientId = 'laravelClient'; // Client ID
    protected $username = ''; // MQTT Username (jika ada)
    protected $password = ''; // MQTT Password (jika ada)

    public function subscribe($topic)
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->clientId);

        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            return false;
        }

        $topics[$topic] = array("qos" => 0, "function" => "procMsg");
        $mqtt->subscribe($topics, 0);

        while ($mqtt->proc()) {
            // Proses data MQTT
        }

        $mqtt->close();
    }

    public function procMsg($topic, $msg)
    {
        // Proses pesan yang diterima
        // Contoh: Menyimpan data ke database atau melakukan tindakan lain
    }
}
