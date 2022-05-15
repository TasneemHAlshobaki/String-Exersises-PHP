<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $image = $_FILES["file"];
        if(file_exists($image)){
            $image_type = $_
        }else{
            echo "image not exists !! 😕😕"; 
        }
    }else{
        echo "Request error 😕😕";
    }



?>