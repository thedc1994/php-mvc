<?php
/**
 *File name : Session.php  / Date: 1/10/2022 - 2:30 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
class Session{

    public function setAuthUser($user){
        $_SESSION[AUTH_KEY] = $user;
    }

    public function getAuthUser(){
        return $_SESSION[AUTH_KEY];
    }
}