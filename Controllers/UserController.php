<?php
require_once('Controllers/Controller.php');
require_once('Repositories/UserRepository.php');

class UserController extends Controller{

    protected $repository;

	public function __construct(){
		parent::__construct();
		$this->repository = new UserRepository();
	}

	public function index(){
		$var1 = 'a';
		$var2 = 'b';
		return $this->view('users',compact('var1','var2'));
	}

	public function edit(){
		$user = (new User())->find($this->data['user_id']);

		if(is_null($user)){
		    alert('User not found');
		    return;
        }

		$user = $this->repository->update($user);


	}

}