<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

    $apiToken = 'YOUR_TOKEN';
    $url = 'URL_WHERE_REQUEST_IS_TO_BE_SEND';
    $client = new Client();

    $requestParameters = [
        'verify' => false, // this line is only for testing server
        'headers' => [
            'Authorization' => 'Bearer '. $apiToken,
            'Key' => 'value' // you can send any Key value pair/s here 
        ],
    ];

    try {
        $response = $client->request('GET', $url, $requestParameters);
    } catch (GuzzleException $e) {
        die($e->getMessage());
    }

header('Content-Type: application/json');
echo $response->getBody()->getContents();
