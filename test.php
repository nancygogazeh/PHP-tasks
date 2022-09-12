<?php
//<h1>hello</h1>

/* multiple line 
$_a="hi ;
$_b= "ali" ; */


// echo'I love PHP';
// echo "<br>";
// echo "MORE THAN ANY LANGUAGE ";
// echo "<br>";
// echo "nancy" . " ". "ali"  ;
// echo "<br>";
// echo " ";
// $a=100;
// $b=200;
// $age = 25;
// $Name ='ahmed';


// $txt_NAME = "W3Schools.com";
// echo "I love " . $txt_NAME . "!";



// echo "<br>";



// if ($a ==100 && $age=25 && $b >20){
 
//     echo" true" ;
// }
// echo "<br>";

// if($a ===100 xor  $age=25 xor $b >20){

//     echo " accepted" ;
 

// }

// echo "<br>";

// if($Name !=='ahmed'){

//     echo "false" ;
// }

// for ($i =1 ; $i <= 10 ; $i++){

//     echo $i . " <br>";
// }

echo 'QUESTION #1 ' ;
$str="hello";
$upp=strtoupper($str);
echo $upp;
/////
echo "<br>";
$str="HELLO";
$upp=strtolower($str);
echo $upp;
//////
echo "<br>";
$str="hello world";
$upp=ucwords($str);
echo $upp;
echo "<br>";

///////////
$str="hello world";
$upp=ucfirst($str);
echo $upp;
echo "<br>";

/////////////////////2

echo 'QUESTION #2 ' ;
$date = date_create_from_format('dmy', "110922");
echo date_format($date, 'Y-m-d');

echo "<br>";
//////////////////////3

echo 'QUESTION #3 ' ;
$Word="nancy";
$sentence ="hello every one , my name is nancy ali ";
if (strpos($sentence , $Word)!==false){
    echo " the word is found" ;

}else
{
echo "the word not found";}
echo "<br>";

//////////////////4

echo 'QUESTION #4 ' ;
echo "<br>";
$path = pathinfo('/www/htdocs/inc/lib.inc.php');
echo $path['filename'];
echo "<br>";
/////////////////////6

echo 'QUESTION #6 ' ;
$str="www.orange.com";
$newstring = substr($str, -3);
// $newstring = substr($str, 0,4);//the first 3 digit

echo $newstring;
echo "<br>";
//////////////////////7

echo 'QUESTION #7 ' ;
$combination = "ahijklmnopqrstuvwxkkkmdmfmgfd887qd5g5d6s3s2cyzAg";
$shfl = str_shuffle($combination);
$pswd = substr($shfl,2,6);
echo $pswd;
echo "<br>";
/////////////////////////5

echo 'QUESTION #5 ' ;
$email  = 'nancy@gmail.com';
  // username by slicing the string till the first occurrence of ‘@’ 
  // Get the username by slicing string
  $username = strstr($email, '@', true);
//   $final=strstr($email, 'gmail');
//   echo $final;
  
  // Display the username
  echo $username."\n";
  echo "<br>";
///////////////////////////8

echo 'QUESTION #8 ' ;
$str = 'Nancy ali mustafa shammary';
 
// Display replaced string
echo str_replace("Nancy", "sandy", $str);
echo "<br>";

/////////////////////////9
//string formating
//The strspn() function returns the number of characters found in the string that contains only characters from the charlist parameter.


echo 'QUESTION #9 ' ;
$string1 = 'foobarbaz';
$string2 = 'foobarbiz';
$pos = strspn($string1 ^ $string2, "\0");
// printf() function outputs a formatted string.
printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
echo "<br>";

///////////////////////////11
echo 'QUESTION #11 ' ;
echo "<br>";
$str = 5;
echo ++$str; // prints 'next letter'

echo "<br>";




///////////////////////////12
echo 'QUESTION #12 ' ;
$originalString="The brown fox";
$insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($originalString, $insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo "<br>";

///18 to return the

$s=strstr($originalString, 'brown',true);
echo $s;
echo "<br>";

////////////////////QUESTION13

echo 'QUESTION #13 ' ;
echo trim("000000423423.24", "0") . "<br>";

///////////QUESTION 14

echo 'QUESTION #14 ' ;
$var = 'the quick brown fox jumps over the lazy dog';
echo  str_replace('fox', ' ', $var);
echo '<br>';


///////////QUESTION 15

echo 'QUESTION #15 ' ;
$var = 'the quick brown fox jumps over the lazy dog----';
echo str_replace( '-', ' ', $var);
echo "<br>";

///////////QUESTION 16

echo 'QUESTION #16 ' ;

$st='/*1452g6/+-*/37sb8w++-' ;
$res = str_replace( array( '\'', '"',
',' , ';', '<', '>', '/' , '*', '+', '-' ), ' ', $st);
echo $res ;
echo "<br>";

//////////////////////////17

echo 'QUESTION #17 ' ;

$phrase = "All +*/-the ancient.,, classic*+-/ fairy *+tales+/*- have ***-always+-*/ been/ scary *and .,.dark.";
$res = str_replace( array( '\'', '"',
',' , ';', '<', '>', '/' , '*', '+', '-' ), ' ', $phrase);
echo implode(' ', array_slice(str_word_count($res, 2), 0, 5));
echo "<br>";

////////////////////////////18
echo 'QUESTION #18 ' ;
$var = 'the quick, brown ,,,,,fox ,jumps, over, the, ,,,lazy ,dog';
echo  str_replace(',', ' ', $var);
echo '<br>';

///////////////19
echo 'QUESTION #19 ' ;
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n";


 ///////////////////////////////////////
 function writeMsg() {
    echo "<br>";
    echo "Hello every one!";
  }
  
  writeMsg(); // call the function
  //////////////////
  function square($number)
{
    return $number * $number;
}
echo "<br>";
echo square(4);   

//////////////////////////
echo "<br>";

function sayhello ($name){


    echo "hello " . $name ;
}
sayhello("nancy");

////////////////////////////var dump , print_r
echo "<br>";

$data=["username"=> "ALI" , "password"=> true , "age"=> 16];
var_dump($data);
echo "<br>";
print_r($data);

//////////////////////////////

function student ($student_Name , $age , $location){

    echo "<br>";

   
    var_dump($student_Name , $age , $location);

}
student( 'ali' , 33 , 'amman');
//////////////

echo "<br>";
function sayhello (){
echo "hello every one!!"
}
sayhello();