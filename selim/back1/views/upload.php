<?php

$target_path = "views/";
$filename='fileToUpload';
$tmp=".png";
$target_path = $target_path.basename( $_FILES[$filename]['tmp_name']);

if(move_uploaded_file($_FILES[$filename]["tmp_name"], "/Back/views/".$tmp".png")) {
    echo "File uploaded successfully!";
} else{
    echo "Sorry, file not uploaded, please try again!";
}

?>
