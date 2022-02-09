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
        'url'     => '/login',
        'name'    => 'auth.login',
        'use'     => 'AuthController',
        'action'  => 'login'
    ],

    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
        'use'     => 'AuthController',
        'action'  => 'logout'
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

    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'AuthController',
        'action'  => 'editProfile'
    ],

    [
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'AuthController',
        'action'  => 'updateProfile'
    ],

    // routers for admin
    [
        'method'  => 'GET',
        'url'     => '/admin/users',
        'name'    => 'admin.users',
        'use'     => 'Admin/UsersController',
        'action'  => 'index'
    ],

    [
        'method'  => 'POST',
        'url'     => '/admin/users/show-form-edit',
        'name'    => 'admin.users.show-form-edit',
        'use'     => 'Admin/UsersController',
        'action'  => 'showFormEdit'
    ],

    [
        'method'  => 'POST',
        'url'     => '/admin/users/delete',
        'name'    => 'admin.users.delete',
        'use'     => 'Admin/UsersController',
        'action'  => 'delete'
    ],

); 
