<?php
require_once('Controllers/Controller.php');
require_once('Models/User.php');
require_once('libs/Validator.php');
require_once('Repositories/UserRepository.php');

class AuthController extends Controller{

    protected $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function showLogin(){

        return $this->view('auth/login');
    }

    public function register(){

        $validate = Validator::validateEmpty($this->data, [
            'username','password','re_password','fullname','date_of_birth'
        ]);


        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        // tạo tài khoản
        $user = $this->userRepository->createUser($this->data);

        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công

        return $this->redirect(Route::name('users.edit',['user_id' => $user->id]));
    }

    public function checkUsername(){

        $users = (new User())->getList(["username='{$this->data['username']}'"]);

        if(count($users) == 0){
           return $this->response(['valid' => true]);
        }

        return $this->response(['valid' => false]);



    }

}