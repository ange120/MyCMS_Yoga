<?php

require_once 'Repository.php';

class UploadPhotoRepository extends Repository
{
    public function checkPhoto()
    {
        $result = [];
        $directory = "public/upload";

        $allowed_types = array("jpg", "png", "svg", "webp");

        $file_parts = array();
        $ext = "";
        $title = "";
        $i = 0;

        $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");

        while ($file = readdir($dir_handle)) {
            if ($file == "." || $file == "..") continue;
            $file_parts = explode(".", $file);
            $ext = strtolower(array_pop($file_parts));

            if (in_array($ext, $allowed_types)) {
                $result[] = $directory . '/' . $file;
                $i++;
            }

        }

        closedir($dir_handle);

        return $result;
    }

    public function addNewPhoto($data,$name)
    {
        $filePath = "public/upload/".$name;

        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png', 'svg', 'webp' ])) {
                throw new \Exception('invalid image type');
            }
            $data = str_replace( ' ', '+', $data );
            $data = base64_decode($data);

            if ($data === false) {
                throw new \Exception('base64_decode failed');
            }
        } else {
            throw new \Exception('did not match data URI with image data');
        }
        $filepas = $filePath.".".$type;
        file_put_contents("{$filePath}."."{$type}", $data);

        return $filepas;
    }

}