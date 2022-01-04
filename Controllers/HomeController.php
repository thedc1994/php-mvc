<?php
/**
 *File name : HomeController.php  / Date: 12/21/2021 - 11:16 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

require_once('Controllers/Controller.php');
require_once('Models/User.php');

class HomeController extends Controller{

    public function index(){

        $users = (new User())->getList([
            "id > 2", "username like '%thedc%'"
        ]);

        return $this->view('home');
    }

}