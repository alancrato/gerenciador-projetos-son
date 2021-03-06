<?php

use Pimple\Container;
use Zend\EventManager\EventManager;

$container = new Container();

$container['events'] = function (){
  return new EventManager;
};

$container['db'] = function (){
   $dsn = 'mysql:host=localhost;dbname=gerenciador-projetos-son';
   $username = 'root';
   $password = '';
   $options = [
     \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
   ];

   $pdo = new \PDO($dsn, $username, $password, $options);

   $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

   return $pdo;
};