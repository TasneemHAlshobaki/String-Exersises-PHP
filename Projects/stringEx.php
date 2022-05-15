<?php

//Write a PHP code that reverse a string without using strrev() function


$str = "Hello, how are you ";
echo 'Original Text "'. $str . '" <br>';
echo 'reverse a string " ';
for($i = strlen($str) ; $i >= 0 ; --$i){
    if(isset($str[$i])){
        echo $str[$i];
    }
    
}

echo ' " <br>';








//Write a PHP code to count words in a string, without using str_word_count() function.

$str=" This is a string count program ";
  $wordcount = 0;
 
  for($i=0;$i < strlen($str);$i++){
 
      if($str[$i]!=' '){
          $wordcount++;
          while($str[$i]!=' '){
              $i++;
          }
      }
 
  }
 
echo "Total word count is".' '. $wordcount.'<br>';



















/*
Write a PHP script to split the following string.
Sample string : '082307'
Expected Output : 08:23:07
*/




$times = "082307";
echo substr(chunk_split($times, 2, ':'), 0, -1)."<br>";




/*
Write a PHP script to extract the file name from the following string.
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'
*/

$link = "www.example.com/public_html/index.php";
$file_name = substr(strrchr($link, "/"), 1);
echo $file_name . '<br>';




/*Write a PHP script to extract the user name from the following email ID.
Sample String : 'rayy@example.com'
Expected Output : 'rayy'*/
$email = "rayy@example.com";
$name = strstr($email,'@', true);
echo $name.'<br>';


/*Write a PHP script to generate simple random password [do not use rand() function] from a given string.
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Note : Password length may be 6, 7, 8 etc.
*/

$text = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($text), 0, 9).'<br>';



/*
Write a PHP script to print the next character of a specific character.
Sample character : 'a'
Expected Output : 'b'
Sample character : 'z'
Expected Output : 'a'
*/



$cha = 'c';
$next_cha = ++$cha; 
echo $next_cha."<br>";




/*
Write a PHP script to remove all leading zeroes from a string. Go to the editor
Original String : '000547023.24'
Expected Output : '547023.24'
*/



$x = '000547023.24';
$remove = ltrim($x, '0');
echo $remove."<br>";




?>
