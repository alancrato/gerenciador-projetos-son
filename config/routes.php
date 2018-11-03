<?php

$router->add('GET','/', function () use ($container){
    $pdo = $container['db'];
    var_dump($pdo);
    return 'Home page';
});

$router->add('GET','/projects', function (){
    return 'Projects page';
});

$router->add('GET','/projects/(\d+)', function ($params){
    return 'Project page id:' . $params[1];
});