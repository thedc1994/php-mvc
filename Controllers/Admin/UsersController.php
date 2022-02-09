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

    public function showFormEdit(){

        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response(['message' => 'Không tìm thấy người dùng']);
        }

        return $this->view('admin/user/edit-user',compact('user'));


    }

    public function delete(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        $user->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa người dùng thành công'
        ]);
    }
}