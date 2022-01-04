<?php
require_once('Controllers/Controller.php');
require_once('Models/User.php');

class AuthController extends Controller{

    public function register(){
        // validate data


        // create user
        $user = User::find(1);
        dump($user);

        // return user was created


    }

}