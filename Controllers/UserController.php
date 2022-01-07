<?php
require_once('Controllers/Controller.php');
require_once('Repositories/UserRepository.php');

require_once('Models/User.php');

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
		    return $this->response([
		        'message' => 'Không tìm thấy người dùng'
            ]);
        }

		return $this->view('profile',compact('user'));

	}

}