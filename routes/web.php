<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\DbconecController;

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

// $router->get('/lumen', function () {
//     return 'Hello World';
// });

$router->get('/lumen', function () {
    return 'Hellow Lumen, I am very happy because you are installed';
});

// $router->post('/lumenpost', function () {
//     return 'lumen post api';
// });

// $router->put('/lumenput', function () {
//     return 'lumen put api';
// });

// $router->patch('/lumenpatch', function () {
//     return 'lumen patch api';
// });

// $router->get('/user/{id}', function ($id) {

//     return 'user' . $id;
// });

// $router->get('username[/{name}]', function ($name = null) {
//     return $name;
// });

// $router->get('product/{id:[0-9]+}', function ($id) {
//     return "Product Id is" . $id;
// });

$router->get('/userlist', 'BlogController@userlist');
$router->post('/userpost', 'BlogController@userstore');
$router->put('/userput', 'BlogController@userput');
$router->patch('/userpatch', 'BlogController@userpatch');
$router->delete('/userdelete', 'BlogController@userdelete');

$router->get('/productlist', 'BlogController@productlist');
$router->get('/product', 'BlogController@homepage');

///Download response
$router->get('/orderpdf', 'BlogController@order');

$router->get('conection', 'DbconecController@index');
