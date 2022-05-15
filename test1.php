
<?php

$name = $_POST["name"];
$edition = $_POST["edition"];
$year = $_POST["year"];
$authere_name =$_POST["authere_name"];
if(!empty($name) && !empty($edition) && !empty($year) && !empty($authere_name)){
    if (is_string($name) && is_string($authere_name)
    {
        #echo "Name : ".$name ;
        
        # "Edition : ".$edition ."Year : ".$year. "<br>  Auther Name : ". $authere_name; 
    }
}


?>


