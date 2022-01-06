<?php
require_once('Controllers/Controller.php');
require_once('Models/User.php');

class AuthController extends Controller{

    public function register(){

        echo json_encode($this->data);

    }

}