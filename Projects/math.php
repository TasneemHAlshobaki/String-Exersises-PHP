

<?php
/*
Write a PHP code make like ROUND function, without using round(),
ceil() or floor() functions.
*/
echo '<h3 style="color: green ;"> Write a PHP code make like ROUND function, <br> without using round(),
ceil() or floor() functions.</h3><br><br><br>';
function ROUND1($num){
    $nu = $num;
    $re=intval($num);
    if($re>$nu) {
        $re++;
    }
    else{
        $re=intval($num +.5); 
    }
    return $re . '   The work of the original finction ROUND   '. round($nu) .'<br><br>';
}
    echo ROUND1(11.60);



/*

Write a PHP code, take a double number and keep only one digit after floating point.
Samples:
Input = 6.142 , output = 6.1
Input = 88.45 , output = 88.4
Input = 7.4 , output = 7.4

*/

echo '<h3 style="color: green ;"> Write a PHP code, take a double number and keep only <br> one digit after floating point.
Samples:
<br>
Input = 6.142 , output = 6.1<br>
Input = 88.45 , output = 88.4<br>
Input = 7.4 , output = 7.4 </h3>
<br><br><br>';

$number = 8.111;
$format = number_format($number, 1, '.', '');

echo '<br>' . $format . '<br>';



/*

Write a PHP code convert MB to KB

*/
echo '<h3 style="color: green ;"> Write a PHP code convert MB to KB </h3><br><br><br>';
function convert_to_KB ($mega){
    return 'Convert '.$mega .' MB  to KB = ' .$mega* 1024 .' KB <br>';
}


echo convert_to_KB(20);

/*
Write a PHP function that detect if an integer number is from multiplies of 100.

*/

echo '<h3 style="color: green ;"> Write a PHP function that detect <br> if an integer number is from multiplies of 100. </h3><br><br><br>';

 function multiplies($num){
     if ($num % 100 ==0){
         echo $num . ' is from multiplies of 100';
     }else{
        echo $num . ' is not from multiplies of 100';
     }
 }   

 echo multiplies(200).'<br>';
 echo multiplies(150).'<br>';



 /*


 Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false.
Note: An Armstrong number of three digits is an integer so that the sum of the cubes of its digits is equal to the number itself. For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153.

*/

    echo '<h3 style="color: green ;">  Write a PHP program to check whether a number is an Armstrong number or not. <br> Return true if the number is Armstrong otherwise return false.
    Note: An Armstrong number of three digits is an integer <br> so that the sum of the cubes of its digits is equal to <br> the number itself. For example, 153 is an Armstrong number since <br> 1**3 + 5**3 + 3**3 = 153. </h3><br><br><br>';



$num =153;
$sl = strlen($num);
  $sum = 0;
  echo 'Is '. $num .' Armstrong number? ';
  $num = (string)$num;
  
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num[$i],$sl);
  }
  if ((string)$sum == (string)$num) {
    echo "True";
  } else {
    echo"False";
  }

  

  echo '<h3 style="color: green ;"> 
  Write a PHP program to convert word to digit.
  Input: zero;three;five;six;eight;one
  Output: 035681
  </h3><br><br><br>';
  $word = "two;six;five;four;three;four;two";
  $warr = explode(';',$word);
  $result = '';
  foreach($warr as $value){
      switch(trim($value)){
          case 'zero':
              $result .= '0';
              break;
          case 'one':
              $result .= '1';
              break;
          case 'two':
              $result .= '2';
              break;
          case 'three':
              $result .= '3';
              break;
          case 'four':
              $result .= '4';
              break;
          case 'five':
              $result .= '5';
              break;
          case 'six':
              $result .= '6';
              break;
          case 'seven':
              $result .= '7';
              break;
          case 'eight':
              $result .= '8';
              break;
          case 'nine':
              $result .= '9';
              break;    
      }
  }
echo $word . ' is ' . $result;




echo '<h3 style="color: green ;"> 
Write a PHP program to compute the sum of the prime numbers less than 100.
Note: There are 25 prime numbers are there in less than 100.
2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59,
 61, 67, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060
</h3><br><br><br>';
 $prim = array();
 $is_prime = false ;
 for($i = 2; $i < 100 ; $i++){
    $is_prime = true ;
    for($j = 2; $j<=($i/2); $j++){
        if($i%$j == 0){
            $is_prime = false ;
            break;
        }

    }
     if($is_prime ){
        array_push($prim ,$i);
     }
     if(count($prim)==100){
         break;
     }
 }
 echo 'sum of the prime numbers less than 100 =' . array_sum($prim)  ;






 echo '<h3 style="color: green ;"> 
 Write a PHP code that compute (integer * number of digits of integer).
Samples:
Input = 433 , output = 433 * 3
Input = 14 , output = 14 * 2
Input = 4771 , output = 4771 * 4

 </h3><br><br><br>';

 $numberss = 532489 ;
 $num_length = strlen($numberss);
 $resultss = $numberss * $num_length ;

 echo $numberss .' * '.$num_length . ' = ' .$resultss;



 echo '<h3 style="color: green ;"> 
 Write a PHP code convert color to RGP to HEX.
Sample:
input = “229,111,85” , output = “#E56F55”

 </h3><br><br><br>';



$R = 200;
$G = 200;
$B = 1;
    $R = dechex($R);
    if (strlen($R)<2)
    $R = '0'.$R;

    $G = dechex($G);
    if (strlen($G)<2)
    $G = '0'.$G;

    $B = dechex($B);
    if (strlen($B)<2)
    $B = '0'.$B;


echo '#' . $R . $G . $B;










?>