<?php
/**
 *File name : Auth.php  / Date: 1/10/2022 - 2:53 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
class Auth{

    public static function user(){
        return (new Session())->getAuthUser();
    }

    public static function checkAuth(){
        return isset($_SESSION[AUTH_KEY]);
    }
}