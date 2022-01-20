<?php
require_once('Models/Model.php');

class User extends Model{

    protected $table = 'users';

    protected $default_avatar = 'public/avatar/NOIMAGE.jpg';

    protected $attributes = [

        'username',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'avatar'

    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    public function getFullName(){
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }

    public function getAvatar(){

        if(is_null($this->avatar) || trim($this->avatar) ==  '' || !file_exists($this->avatar)){
            return asset($this->default_avatar);
        }

        return asset($this->avatar);
    }

    public function getDateOfBirth(){
        return is_null($this->date_of_birth) || trim($this->date_of_birth) == "" ? "" :
            dateFormat($this->date_of_birth);
    }
}