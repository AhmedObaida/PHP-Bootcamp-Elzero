<?php
#---------------------------------------task1---------------------------------------
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
[$str[(int)$num_two], $str[(int)$num_one]] = [$let_two, $let_one];
echo $str;  
// Write Your Code Here
$str  = str_replace([$str[(int)$num_two], $str[(int)$num_one]], [$let_two, $let_one], $str);
echo $str; // Elzero



#---------------------------------------task2---------------------------------------
$str = "Orezle";
$str = ucfirst(strrev(lcfirst($str)));
echo $str;
// Elzero
echo "<br>";



#---------------------------------------task3---------------------------------------
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(str_replace(strtolower($str), strtolower($str).$char , strtolower($str)), $num);
echo "<br>";
echo strtolower(str_repeat(str_replace($str, $str.$char , $str), $num));
echo "<br>";

// echo str_replace('', $char, strtolower(str_repeat($str, $num) . $char)); // All in one line


// aaa_aaa_aaa_
echo "<br>";





#---------------------------------------task4---------------------------------------

$str = "<div><b>Elzero</b></div>";
$str = strip_tags($str , "<b>");
echo $str;
// <b>Elzero</b>

echo "<br>";


#---------------------------------------task5---------------------------------------

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, strtolower($o) , $four , $four ); // 1
echo "<br>";
echo substr_count($str, $e); // 2



echo "<br>";
#---------------------------------------task6---------------------------------------

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("", $chars);
// Output "Elzero"


echo "<br>";



#---------------------------------------task7---------------------------------------

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo ucwords(strtolower(str_replace('12' , '', implode("", $chars))));
// Output "Elzero"


echo "<br>";