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

$router->get('/rates/v1','Api\v1\RateController@index');
$router->post('/rates/v1','Api\v1\RateController@store');
$router->get('/rates/v1/{rate}','Api\v1\RateController@show');
$router->put('/rates/v1/{rate}','Api\v1\RateController@update');
$router->patch('/rates/v1/{rate}','Api\v1\RateController@update');
$router->delete('/rates/v1/{rate}','Api\v1\RateController@destroy');
