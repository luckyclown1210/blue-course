<?php

if (!defined('SYSPATH'))
    die('Request not found');

function input_get($key) {
    if (isset($_GET[$key]))
        return $_GET[$key];
    else
        return null;
}

function upload() {
    
    $target_dir = "public/images/course/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
   

}

?>