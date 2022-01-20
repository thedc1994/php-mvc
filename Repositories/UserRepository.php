<?php

/**
 *File name : UserRepository.php  / Date: 12/23/2021 - 4:29 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
class UserRepository
{

    protected $avatarPath = 'public/avatar/';

    public function createUser($data)
    {

        $name = $this->analysisName($data['fullname']);

        $dataCreate = [
            'username'      => $data['username'],
            'email'         => isset($data['email']) ? $data['email'] : '',
            'password'      => md5($data['password']),
            'date_of_birth' => date_format(date_create($data['date_of_birth']), 'Y-m-d')
        ];

        $dataCreate = array_merge($dataCreate, $name);

        return (new User())->create($dataCreate);
    }

    public function updateUser($user, $data)
    {

        $avatar = $user->avatar;
        $filename = $this->avatarPath.$user->username.'-'.time();
        if (isset($data['avatar'])) {
            if (is_string($data['avatar'])) {
                $avatar = File::uploadBase64($data['avatar'], $filename);
            } else {
                $avatar = File::uploadFile($data['avatar'], $filename);
            }

            if (!$avatar) {
                $avatar = $user->avatar;
            }

        }


        $dataUpdate = array(
            'avatar'        => $avatar,
            'email'         => isset($data['email']) ? $data['email'] : $user->email,
            'first_name'    => isset($data['first_name']) ? $data['first_name'] : $user->first_name,
            'middle_name'   => isset($data['middle_name']) ? $data['middle_name'] : $user->middle_name,
            'last_name'     => isset($data['last_name']) ? $data['last_name'] : $user->last_name,
            'date_of_birth' => isset($data['date_of_birth']) ? dateFormat($data['date_of_birth'],'Y-m-d') : $user->date_of_birth,
        );

        $user->update($dataUpdate);

        return $user;
    }

    public function analysisName($name)
    {
        $names = explode(' ', $name);

        foreach ($names as $index => $word) {
            if ($word == "") {
                unset($names[$index]);
            }
        }
        $names = array_values($names);

        $length = count($names);

        if ($length == 1) {
            return [
                'last_name'   => '',
                'middle_name' => '',
                'first_name'  => $names[0],
            ];
        }
        if ($length == 2) {
            return [
                'last_name'   => $names[0],
                'middle_name' => '',
                'first_name'  => $names[1],
            ];
        } else {
            $middle_name = '';

            for ($i = 1; $i <= $length - 3; $i++) {
                $middle_name .= $names[$i] . ' ';
            }
            $middle_name .= $names[$length - 2];

            return [
                'last_name'   => $names[0],
                'middle_name' => $middle_name,
                'first_name'  => $names[$length - 1],
            ];
        }
    }


    public function getAllUser(){
        return (new User())->getList([],"ORDER BY 'first_name'");
    }

}