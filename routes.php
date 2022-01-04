<?php

const CONTROLLERS = array(
    [
        'method'  => 'GET',
        'url'     => '/',
        'name'    => 'home',
        'use'     => 'HomeController',
        'action'  => 'index'
    ],
    [
      'method'  => 'GET',
      'url'     => '/users',
      'name'    => 'users',
      'use'     => 'UserController',
      'action'  => 'index'
    ],

    [
      'method'  => 'GET',
      'url'     => '/users/{user_id}/edit',
      'name'    => 'users.edit',
      'use'     => 'UserController',
      'action'  => 'edit'
    ],

    [
      'method'  => 'POST',
      'url'     => '/register',
      'name'    => 'auth.register',
      'use'     => 'AuthController',
      'action'  => 'register'
    ]



); 
