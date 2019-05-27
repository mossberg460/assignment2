<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*$router->get('/', function () use ($router) {
    //return $router->app->version();
    // Convert our products from json to object in PHP
    $products = json_decode(file_get_contents("../resources/products.json"));
    // Return all products in json-format
    return response()->json($products);
});*/

/*$router->get('/', function () {
    // Convert our products from json to object in PHP
    $products = json_decode(file_get_contents("../resources/products.json"));
    // Return all products in json-format
    return response()->json($products);
});*/

$router->get('/', function () use ($router) {
  return $router->app->version();
});

// These routes flow into GamesController.index() etc.
$router->get('/games', 'GamesController@index');
$router->post('/games', 'GamesController@create');
$router->get('/games/{id}', 'GamesController@show');
$router->delete('/games/{id}', 'GamesController@delete');
$router->put('/games/{id}', 'GamesController@update');
