<?php

$router->add('GET','/', function () {
    return 'Home Page';
});

$router->add('GET','/projects', function (){
    return 'Projects page';
});

$router->add('GET','/users/(\d+)', '\App\Controllers\UsersController::show');