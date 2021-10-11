<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/1');

echo $response->getBody();