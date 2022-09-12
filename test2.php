<?php
echo " QUESTION #1";
function primenumber ($num)
    
    {
     for($x=2; $x<$num; $x++)
       {
          if($num %$x ==0)
              {
               return 0;
              }
        }
      return 1;
       }
    $a = primenumber(3);
    if ($a==0)
    echo 'This is not a Prime Number.....'."\n";
    else
    echo 'This is a Prime Number..'."\n";
    echo "<br>" ;

/////////////////////////////////
echo " QUESTION #2";

echo "<br>" ;
function Reverse($str)
{

$rev= strrev($str);
echo $rev ;

}

Reverse('HELLO');
echo "<br>" ;

/////////////////////////////////
echo " QUESTION #3";

echo "<br>" ;

function isString_lowercase($str1)
   {
    for ($x = 0; $x < strlen($str1); $x++) {
	      if (ord($str1[$x]) >= ord('A') &&
          ord($str1[$x]) <= ord('Z')) {
            echo "Your string is not lowercase" ;
         }
         }
    echo "Your string is lowercase" ;       }
    
isString_lowercase('mynameisnancy');
echo "<br>" ;
// isString_lowercase('MYNAMEISNANCY');

/////////////////////////////////
echo " QUESTION #5";

echo "<br>" ;
function swap ($a, $b){

    // Swap Logic
    
    echo "\nThe number before swapping is: \n";
    echo "Number a =".$a." and b=".$b;
    
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<br>" ;
    echo "\nThe number after swapping is: \n";
    echo "Number a =".$a." and b=".$b."\n";


}
swap (15, 8);
echo "<br>" ;

//////////////////////

echo " QUESTION #6";
echo "<br>" ;

function armstrongCheck($number){

    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($number == $sum)
        echo 'Yes,Its armstrong number';

    else{
 
    echo 'not an armstrong number'; }  
} armstrongCheck(407);
echo '<br>';
/////////////////
/*another solution */

function Armstrong($num){
    $numto="$num";
$sum=0;
$pow=0;

    for($i=0;$i<strlen($numto);$i++){

       $pow= pow($numto[$i],3);
       $sum=$sum+$pow;

    }

    if($num==$sum){
        echo $num." is  Armstrong";
    }
    else{
        echo $num."is not armstrong ";
    }


}
Armstrong(407);
echo '<br>';


//////////////////////
echo " QUESTION #7";
echo "<br>" ;

function ispalindrome($string) 
{
  if ($string == strrev($string)){
      echo " Yes it's a palindrome ";
      echo "<br>" ;}
  else {
	  echo" No, itsn't a palindrome ";}}

echo ispalindrome('eva,can i see bees in a cave ?')."\n";



//////////////////////
echo " QUESTION #8";
echo "<br>" ;
function remove_duplicate (){
    $data = [19, 21, 19, 21, 46, 21, 29, 21, 18];
    print_r(array_unique($data));
}


remove_duplicate();




///////////////////////////////////////////////logical ////////////////////////////////////////////////////////
//////////////////
echo "<br>" ;
echo "Question #1";
echo "<br>" ;
function yearCheck($my_year){
   
     if ($my_year % 4 == 0)
       print("It is a leap year");
    else
       print("It is not a leap year");
 }
//  $my_year = 2013;
 yearCheck(2013);

 echo "<br>" ;




 ///////////////////////////////////////
 echo "<br>" ;
 echo "Question #2";

function checkSeason ($temp){
if ($temp <20)
{
    echo " We are in winter season";
}
else
echo " It's summer time!";

}

checkSeason(27);
echo "<br>" ;


 ///////////////////////////////////////
 echo "Question #3";
echo "<br>" ;
$sum=0;
function summation ($a, $b){
if($a==$b){
echo  $sum=($a+$b)*3;}
else{
 echo   $sum=$a+$b;
}


}

summation (2, 2);
///////////////////////////////////////
echo "<br>" ;
echo "Question #4";

echo "<br>" ;
$sum=0;
function isequal ($a, $b){
    $sum=($a+$b);
if($sum==30){
echo  $sum;
echo "<br>" ; }

else{
 echo  "false" ; 
 echo "<br>" ;
}


}
echo "<br>" ;

isequal (20, 10);
//////////////////////////////////////
echo "Question #5";
echo "<br>" ;
function test($n) 
{
   return $n % 3 == 0 ;
   echo "<br>" ;
}

var_dump(test(20));
echo "<br>" ;

//////////////////////////////////////6
echo "Question #6";
echo "<br>" ;
function check($x) 
{
   if ($x >= 20 || $x <= 50)
   {
   echo "true";

   }
else
echo "false" ;

   }
   check(20);
   echo "<br>" ;


//////////////////////////////////////7
echo "Question #7";
echo "<br>" ;
function largest ($a ,$b ,$c){
$first=$a;
if($first > $b and $first > $c)
{
    $first=$first;
    echo $first;
}else if( $b >$a and $b > $c)
 
{
    echo $b;
}else
echo $c;


}

largest (500,80,9);
echo "<br>" ;
//////////////////////////////////////8
echo "Question #8";
echo "<br>" ;


function calcElectriciy ($numberUnit){
    if ($numberUnit < 50){
        $jd = $numberUnit * 2.5 ;
        echo $jd ;
    }
    elseif (50 < $numberUnit and $numberUnit <150){
        $jd = (50*2.5) + (($numberUnit-50)*5) ;
         echo $jd ;
    }
    elseif (150 < $numberUnit and $numberUnit <250){
        $jd = (50*2.5) +(100*5) + (($numberUnit-150)*6.2);
         echo $jd ;
    }
    elseif ( 250 < $numberUnit ){
        $jd = (50*2.5) + (100*5) +  (100*6.2) +(($numberUnit-250)* 7.5) ;
         echo $jd ;
    }

}calcElectriciy (200);
echo "<br>" ;
//////////////////////////////////////
echo "Question #9";
echo "<br>" ;


//     function calculate($n1,$n2,$calcu)
//     {
//         switch('$calcu')
//         {
//         case "+";
//             $compute = $n1 + $n2; 
//             echo $compute;
//             break;
//         case "-";
//             $compute = $n1 - $n2; 
//             echo $compute;
//             break;
//         case "*";
//             $compute = $n1 * $n2; 
//             echo $compute;
//             break;
//         case "/";
//             $compute = $n1 / $n2; 
//             echo $compute;
//             break;
//         }
//     }
// calculate(2,5,"*");

function calculator ( $num1 ,$num2 , $operation){
if ( $operation == "+"){
       echo $num1+$num2;
}
else if ( $operation == "-")
{
       echo $num1-$num2;}
else if ( $operation == "*")
{
        echo $num1*$num2 ;}
 else if ( $operation == "/")
 {
        echo $num1/$num2; }

}
calculator ( 2,4,"*");

echo "<br>" ;
//////////////////////////////////////10
echo "Question #10";
echo "<br>" ;
function eligable_vote ($age){
if ($age>=18){
    echo " the person is eligible to vote";
}
else{
echo "the person isn't eligable to vote" ;

}
}
eligable_vote (15);
echo "<br>" ;
//////////////////////////////////////11
echo "Question #11";
echo "<br>" ;
function ispositive ($number){
if ($number ==0)
echo " Number is zero";
else if ($number >0){
    echo " the number is positive";
}else
echo "the number is negative ";

}
ispositive (-10);
echo "<br>" ;


//////////////////////////////////////12
echo "Question #12";
echo "<br>" ;
$sum=0;
function calculate_score($a,$b ,$c ,$d ,$e) {
$sum=$a+$b+$c+$d;
$avg= $sum/$e;
if ($avg <60)
echo "F";
else if ( $avg >60 and $avg<=70 )
echo "D";
else if ( $avg >70 and $avg<=80 )
echo "C";
else if ( $avg >80 and $avg<90 )
echo "B";
else if ( $avg >=90 )
echo "A";
}
calculate_score(98 ,98 ,90 , 90 , 4);
echo "<br>" ;
?>