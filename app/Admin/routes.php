<?php

use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
   // $router->get('/auth/articles', 'ArticleController@index');
    $router->resource('/auth/articles', 'ArticleController');
//     $router->resource('users', UserController::class);
//    $router->resource('articles', ArticleController::class);

});


