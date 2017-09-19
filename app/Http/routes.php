<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return "Lumen RESTful API By CoderExample (http://coderexample.com)";
});





$app->get('uvicaciones','App\Http\Controllers\UvicacionesController@index');
$app->post('uvicacionesinsert/','App\Http\Controllers\UvicacionesController@createuvicaciones');