<?php

use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
   // $router->get('/auth/articles', 'ArticleController@index');
//    $router->resource('/articles', 'ArticleController');
    $router->resource('/members', 'MemberController');
    $router->resource('/orders', 'OrderController');
    $router->resource('/vouchers', 'VoucherController');
    $router->resource('/stores', 'StoreController');
//     $router->resource('users', UserController::class);
//    $router->resource('articles', ArticleController::class);

});


