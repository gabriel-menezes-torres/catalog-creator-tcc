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

$router->group(['prefix' => 'catalog'], function () use ($router) {
    $router->post('/add', 'CatalogController@add');
    $router->get('/fetchAll', 'CatalogController@listAll');
    $router->post('/fetchByCategory', 'CatalogController@fetchByCategory');

    $router->group(['prefix' => 'stock'], function () use ($router) {
        $router->post('/update', 'CatalogController@updateStock');
        $router->get('/fetchByCatalogId', 'CatalogController@fetchStockByCatalogId');
    });

    $router->group(['prefix' => 'category'], function () use ($router) {
        $router->post('/add', 'CatalogController@addCategory');
        $router->get('/fetchAll', 'CatalogController@fetchAllCategory');
    });
});
