<?php
/**
 *File name : Auth.php  / Date: 1/10/2022 - 2:53 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
class Auth{

    public static function user(){
        $userData =  Session::get(AUTH_KEY);

        if(is_null($userData)){
            return null;
        }

        return (new User())->setAttributes($userData);
    }

    public static function checkAuth(){
        return !is_null(Session::get(AUTH_KEY));
    }

    public static function setUser($user){
        return Session::set(AUTH_KEY, $user);
    }

    public function logout(){
        return Session::forget(AUTH_KEY);
    }
}