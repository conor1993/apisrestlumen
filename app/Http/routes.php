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


$app->get('api/v1/book','App\Http\Controllers\BookController@index');

$app->get('api/v1/book/{id}','App\Http\Controllers\BookController@getbook');

$app->post('api/v1/books/','App\Http\Controllers\BookController@createBook');

$app->put('api/v1/book/{id}','App\Http\Controllers\BookController@updateBook');

$app->delete('api/v1/book/{id}','App\Http\Controllers\BookController@deleteBook');



$app->get('api/v1/uvicaciones','App\Http\Controllers\UvicacionesController@index');
$app->post('api/v1/uvicacionesinsert/','App\Http\Controllers\UvicacionesController@createuvicaciones');