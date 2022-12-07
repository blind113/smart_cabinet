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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => '/api'], function() use ($router){
    
    $router->group(['prefix' => '/user'], function() use ($router){
        $router->post('/store', 'UserController@store');
        $router->get('/{id}', 'UserController@show');
        $router->get('/', 'UserController@index');
        $router->delete('/{id}', 'UserController@destroy');
        $router->put('/{id}', 'UserController@update');
    });

    $router->group(['prefix'=>'/cabinet'], function() use ($router){
        $router->post('/store', 'CabinetController@store');
        $router->get('/{id}', 'CabinetController@show');
        $router->delete('/{id}', 'CabinetController@destroy');
        $router->put('/{id}', 'CabinetController@update');
        $router->get('/user/{user_id}', 'CabinetController@showByUserId');

    });

    $router->group(['prefix' => '/pots'], function() use ($router){
        $router->post('/store', 'PotsController@store');
        $router->get('/{id}', 'PotsController@show');
        $router->get('/user/{user_id}', 'PotsController@showByUserId');
        $router->get('/cabinet/{cabinet_id}', 'PotsController@showByUserId');
        $router->delete('/{id}', 'PotsController@destroy');
        $router->put('/{id}', 'PotsController@update');
    });
    

});