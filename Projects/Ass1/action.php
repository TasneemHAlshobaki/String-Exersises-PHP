<?php
require_once('math.php');
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["Operation"];
    echo "Hi 😊🖐👋" . "<br>" ;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!empty($num1) && !empty($num2) ){
        $n1 = doubleval($num1);
        $n2 = doubleval($num2);
            if(is_double($n1) && is_double($n2)){
                if ($operation == "+"){
                    echo Sumations($n1 ,$n2);
                }elseif($operation == "-"){
                    echo Subsubrations($n1 ,$n2);
                }elseif($operation == "*"){
                    echo multiples($n1 ,$n2);
                }elseif($operation == "/"){
                    echo devides($n1 ,$n2);
                }else{
                    echo "The operation is incorrect !!!😓☹";
                }
            }else {
               echo "It must be a number !!!😓☹";
            }
        }else {
            echo "It must not be empty !!!😓☹";
        }
    }else {
        echo "Requiste error !!⁞";
    }


 // echo header('Location: http://localhost/Projects/Projects/project1/Ass1/form.php');
