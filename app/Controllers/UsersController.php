<?php

namespace App\Controllers;

use App\Model\User;

class UsersController
{
    /**
     * UsersController constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function show($id)
    {
        $user = new User($this->container);
        $data = $user->get($id);

        return "My name is: " . $data['name'];
    }
}