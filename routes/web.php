<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer','middleware' => ['is_auth_swagger']], function() use ($router) {
    $router->get('logs', 'LogViewerController@index');
});
$router->get('/', function () use ($router) {
    abort(404);
});

