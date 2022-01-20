<?php
/**
 *File name : UsersController.php  / Date: 1/20/2022 - 2:26 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

require_once('Controllers/Controller.php');
require_once('Repositories/UserRepository.php');

require_once('Models/User.php');

class UsersController extends Controller
{
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->repository = new UserRepository();
    }

    public function index(){
        $users = $this->repository->getAllUser();
        return $this->view('admin/user/index', compact('users'));
    }
}