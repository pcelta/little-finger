<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->post('/webhook', function () {

    $data = [
        'message' => 'little finger works! yeah! And this is a Post Response'
    ];
    return new \Symfony\Component\HttpFoundation\JsonResponse($data);
});

$app->get('/', function () {

    $data = [
        'message' => 'little finger works! yeah!'
    ];
    return new \Symfony\Component\HttpFoundation\JsonResponse($data);
});

$app->run();