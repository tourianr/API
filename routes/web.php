<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Controller;

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

$router->get('/index', "HandAdminController@index");
$router->get('/estoque', "HandAdminController@estoque");
$router->get('/pedidos/sucess', "HandAdminController@pedidossucess");
$router->get('/pedidos/wait', "HandAdminController@pedidoswait");
$router->get('/pedidos/cancel', "HandAdminController@pedidoscancel");
$router->get('/vendas/total', "HandAdminController@vendastotal");