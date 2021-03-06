<?php

namespace App\Controllers;

use App\Model\User;

class UsersController
{
    public function show($container, $request)
    {
        $user = new User($container);
        $user->create(['name' => 'Alan']);
        return $user->get($request->attributes->get(1));
    }
}