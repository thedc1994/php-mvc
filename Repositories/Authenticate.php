<?php
/**
 *File name : Authenticate.php  / Date: 1/10/2022 - 2:19 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

class Authenticate{

    public function login($username, $password){
        $password = md5($password);
        $users = (new User())->getList([
            "username='{$username}'",
            "password='{$password}'",
        ]);

        if(empty($users)){
            return false;
        }

        // TODO: LƯU LẠI NGƯỜI DÙNG VỪA ĐĂNG NHẬP
        return Auth::setUser($users[0]);
    }

}