<?php
/**
 *File name : File.php  / Date: 1/17/2022 - 3:12 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

class File{

    public static function uploadBase64($base64, $filename, $checkIsImage = true){

        $base64 = explode(",",$base64);

        $base64Real = isset($base64[1]) ? $base64[1] : $base64[0];

        $image = base64_decode($base64Real);
        $extension  = File::getImageMimeType($image);

        if($checkIsImage && !File::isExtensionImage($extension)){
            return false;
        }

        $filename = $filename.'.'.$extension;
        file_put_contents($filename,$image);
        return $filename;
    }


    public static function getImageMimeType($imagedata)
    {
        $imagemimetypes = [
            "jpeg" => "FFD8",
            "png"  => "89504E470D0A1A0A",
            "gif"  => "474946",
            "bmp"  => "424D",
            "tiff" => "4949",
        ];

        foreach ($imagemimetypes as $mime => $hexbytes) {
            $bytes = File::getBytesFromHexString($hexbytes);
            if (substr($imagedata, 0, strlen($bytes)) == $bytes) {
                return $mime;
            }
        }

        return false;
    }

    public static function isExtensionImage($extension){

        $extensions = ['jpg', 'jpeg', 'png', 'gif', 'tiff', 'bmp', 'heic', 'heif'];

        $extension = strtolower($extension);

        return in_array($extension, $extensions);
    }

    public static function getBytesFromHexString($hexdata)
    {
        for ($count = 0; $count < strlen($hexdata); $count += 2) {
            $bytes[] = chr(hexdec(substr($hexdata, $count, 2)));
        }

        return implode($bytes);
    }


    public static function uploadFile($file, $filename){

        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename .= '.'.$extension;
        move_uploaded_file($file['tmp_name'], $filename);
        return $filename;
    }



}