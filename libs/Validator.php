<?php
/**
 *File name : Validator.php  / Date: 1/7/2022 - 3:38 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

class Validator{

    public static function validateEmpty($data, $params){

        $paramsMissing = [];

        foreach($params as $param){
            if(!isset($data[$param]) || trim($data[$param]) == ''){
                $paramsMissing[] = $param;
            }
        }

        if(count($paramsMissing) > 0){
            return array(
                'valid'     => false,
                'message'   => 'Thiếu các dữ liệu '.implode(',', $paramsMissing)
            );
        }

        return array(
            'valid' => true,
            'data'  => $data
        );

    }

}