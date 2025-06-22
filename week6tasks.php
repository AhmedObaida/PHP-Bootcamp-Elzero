<?php

#---------------------------------------task1---------------------------------------

// function greetings($name, $sex = ""){
//     if ($sex == "male") {
//         return "Hello Mr. $name<br>";
//     } elseif ($sex == "female") {
//         return "Hello Ms. $name<br>";
//     } else {
//         return "Hello $name <br>";
//     }
// }
// echo greetings("Osama", "male");
// echo greetings("Ahmed");
// echo greetings("Sara", "female");

#---------------------------------------task2---------------------------------------

// function get_args(...$args) {
//     // // return implode(" ", $args);
//     // foreach($args as $arg){
//     //     echo "$arg ";
//     // }

// }

// get_args("Hello", "Elzero", "Web", "School");

#---------------------------------------task3---------------------------------------

// function sum_all(...$numbers) {
//     $result = 0;
//     foreach ($numbers as $num) {
//         if ($num == 5) {
//             continue;
//         }
//         elseif ($num == 10) {
//             $num = 20;
//         }
//         $result += $num;
//     }
//     return $result;
// }

// echo sum_all(5,10,5,10);


#---------------------------------------task4---------------------------------------

// function multiply(...$numbers) {
//     $result = 1;

//     foreach ($numbers as $num) {
//         if (is_numeric($num)) {
//             $result *= (int) $num;
//         }
//     }
//     return $result;
// }

// echo multiply(5, 5.5);


#---------------------------------------task5---------------------------------------

// function check_status($a, $b, $c)
// {
// $typeA = gettype($a);
// $typeB = gettype($b);
// $typeC = gettype($c);

// if ($typeA == "string") {
//     $name = $a;
// }
// elseif ($typeB == "string") {
//     $name = $b;
// }
// elseif ($typeC == "string") {
//     $name = $c;
// }

// if ($typeA == "integer") {
//     $age = $a;
// }
// elseif ($typeB == "integer") {
//     $age = $b;
// }
// elseif ($typeC == "integer") {
//     $age = $c;

// }

// if ($typeA == "boolean") {
//     $status = $a;
// }
// elseif ($typeB == "boolean") {
//     $status = $b;
// }
// elseif ($typeC == "boolean") {
//     $status = $c;
// }

// Store variables in an array
// $variables = [$a, $b, $c];


// // Loop through each variable and assign based on type
// foreach ($variables as $variable) {
//     $type = gettype($variable);

//     if ($type == "string") {
//         $name = $variable;
//     } elseif ($type == "integer") {
//         $age = $variable;
//     } elseif ($type == "boolean") {
//         $status = $variable;
//     }

// }

//     return "Hello $name , Your Age Is $age, You Are " . ($status ? "Available" : "Not Available") . " For Hire<br>";
// }

// // Needed Output
// echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"


#---------------------------------------task6---------------------------------------

// function calculate($num1, $num2, $op = "add") {
//     if($op == "add" || $op == "a"){
//         return $num1 + $num2;
//     }
//     elseif($op == "subtract" || $op == "s"){
//         return $num1 - $num2;
//     }
//     elseif($op == "multiply" || $op == "m"){
//         return $num1 * $num2;
//     }
//     else{
//         return "Invalid Operator";
//     }
// }


// // Needed Output
// echo calculate(10, 20); // 30
// echo "<br>";
// echo calculate(10, 20, "add"); // 30
// echo "<br>";
// echo calculate(10, 20, "subtract"); // -10
// echo "<br>";
// echo calculate(10, 20, "multiply"); // 200
// echo "<br>";
// echo calculate(10, 20, "division"); // "Invalid Operator"
// echo "<br>";
// echo calculate(10, 20, "a"); // 30
// echo "<br>";
// echo calculate(10, 20, "s"); // -10
// echo "<br>";
// echo calculate(10, 20, "m"); // 200


#---------------------------------------task7---------------------------------------

// function calculate(int $num_one, int $num_two): float {
//     return $num_one + $num_two;
// }

// echo calculate(20, 10); // 30
// echo "<br>";
// echo gettype(calculate(20, 10)); // Double


#---------------------------------------task8---------------------------------------

// $message = "Hello";

// function Hello($name) {
//     global $message;
//     return $message . " " . $name;
// }

// echo $message("Osama"); // Hello Osama
// echo "<br>";
// echo $message("Ahmed"); // Hello Ahmed




#---------------------------------------task9---------------------------------------


// $greet = function ($name) {
//     return "Greetings $name";
// };

// $greet_arrow = fn ($name) => "Greetings $name";
// // Needed Output
// echo $greet("Osama"); // Greetings
// echo "<br>";
// echo $greet_arrow("Osama"); // Greetings