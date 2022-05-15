<?php
/*
For the following features, determine appropriate HTTP method (GET or POST)
تسجيل مساق جديد               POST
إضافة طالب جديد للجامعة      POST
عرض سجل الدرجات               POST
نشـر منشور على فيسبوك         POST
فتح صفحة على إنستغرام         GET
استعراض الستوري على إنستغرام  GET
إرسال رسالة لمدرس المساق على الموودل   POST


*/


/*


Create a form to add student, with the following inputs:
Name, email, phone, gender (radio button), nationality (dropdown list), have a file in archive (checkbox)
And make necessary form handling and validation
  

*/
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($gender) && !empty($nationality)){
        if(is_string($name) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Hi $name 😊👋🏻" . "<br>" . "Rigister Successfully ✨♥";
        }else{
            echo "Syntax Error!!";
        }
    }else{
        echo "Name, email, phone, gender & nationality is require 😕😕";
    }
}else{
    echo "Request error 😕😕";
}




?>