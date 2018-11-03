<?php

namespace App\Controllers;

use App\Model\User;

class UsersController
{
    public function show($container, $request)
    {
        $user = new User($container);
        $data = $user->get($request->attibutes->get(1));

        return "My name is: " . $data['name'];
    }
}