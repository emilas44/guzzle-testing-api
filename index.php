<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

    $apiToken = '';
    $url = '';
    $client = new Client();

    $requestParameters = [
        'verify' => false, // this line is only for testing server
        'headers' => [
            'Authorization' => 'Bearer '. $apiToken,
            'Key' => 'value' // you can send any paramater here 
        ],
    ];

    try {
        $response = $client->request('GET', $url, $requestParameters);
    } catch (GuzzleException $e) {
        die($e->getMessage());
    }

header('Content-Type: application/json');
echo $response->getBody()->getContents();
