<?php

use App\Controllers\UsersController;
use App\Model\User;

$router->add('GET','/', function () use ($container){
    $user = new User($container);
    $data = $user->get(1);

    var_dump($data);
});

$router->add('GET','/projects', function (){
    return 'Projects page';
});

$router->add('GET','/users/(\d+)', function ($params) use ($container){
    return (new UsersController($container))->show($params[1]);
});