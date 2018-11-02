<?php

use SON\Framework\Router;

require __DIR__.'/vendor/autoload.php';

$router = new Router;

$router->add('GET','/', function (){
   return 'Home page';
});

$router->add('GET','/projects', function (){
    return 'Projects page';
});

$router->add('GET','/projects/(\d+)', function ($params){
    return 'Project page id:' . $params[1];
});

try{
    echo $router->run();
}catch (\SON\Framework\Exceptions\HttpException $e){
    echo json_encode(['error' => $e->getMessage()]);
}