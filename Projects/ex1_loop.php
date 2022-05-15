<?php
 
 #Loop ex1
 /*
 Create a script using a for loop to add all the 
 integers between 0 and 30 and display the total.
 */

 /*
 $total =0;
 for($i = 1 ; $i <= 30 ; $i++){
     $total += $i;
 }

 echo "The total numbers from 1 to 30 : ".$total;
 */



#EX 2 
/*
Create a script to construct the following pattern, using a nested for loop.
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
*
*/


for($i= 1 ; $i<=5 ; $i++){
    echo "*";
    for($j = 5 ; $j >= 1 ; $j--){
        echo "*" ;  
    }

   
}




?>