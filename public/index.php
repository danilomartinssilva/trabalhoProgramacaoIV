<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});




$app->delete('/books/{id}', function ($request, $response, $args) {
    $response->getBody()->write("Este é o DELETE");
    return $response;
});



$app->put('/books/{id}', function ($request, $response, $args) {
    $response->getBody()->write("Este é o PUT");
    return $response;
});


$app->post('/books', function ($request, $response, $args) {
        $response->getBody()->write("Este é o POST");
        return $response;
});


$app->run();