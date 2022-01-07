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
        'method'  => 'GET',
        'url'     => '/show-login',
        'name'    => 'auth.show-login',
        'use'     => 'AuthController',
        'action'  => 'showLogin'
    ],

    [
      'method'  => 'POST',
      'url'     => '/register',
      'name'    => 'auth.register',
      'use'     => 'AuthController',
      'action'  => 'register'
    ],

    [
        'method'  => 'POST',
        'url'     => '/check-username',
        'name'    => 'auth.check-duplicate-username',
        'use'     => 'AuthController',
        'action'  => 'checkUsername'
    ],

); 
