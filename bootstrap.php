<?php

require_once 'vendor/autoload.php';

$apiKey = "{key}";
$credentials = new \Didww\Credentials($apiKey, 'sandbox');
$httpClientConfig = [
    'timeout' => 20,
    // 'debug' => true,
    // 'sink' => STDOUT,
];
\Didww\Configuration::configure($credentials, $httpClientConfig);
