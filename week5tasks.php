<?php
#task 1 
$a = 100;
$b = 200;
$c = 100;
/*
    Check That:
    Variable "b" Larger Than Variable "a"
    Variable "a" Identical To Variable "c"
    Variable "a" Plus Variable "c" Identical To Variable "b"
*/

if ($b > $a && $a == $c and ($a + $c) == $b) {
    echo "Yes";
}

?>

<?php
#task 2 
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if ($a > $b)
{
    echo "A Is  Larger Than B <br>";
}
elseif($a > $c)
{
    echo "A Is  Larger Than C <br>";
}
else
{
    echo "A Is Not Larger Than B Or C <br>";
}

?>


<?php
#task 3

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    #1st way
    // foreach($admins as $admin){
    //     if($_POST['user'] == $admin){
    //         echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    //         echo "This Username " . $_POST['user'] . " Is Admin";
    //     }        
    // }
    // if(!in_array($_POST['user'], $admins)){
    //     echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    // }
    #2nd way
    // if ($_POST['user'] == $admins[0]) {
    //     echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    //     echo "This Username " . $_POST['user'] . " Is Admin";
    // } elseif ($_POST['user'] == $admins[1]) {
    //     echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    //     echo "This Username " . $_POST['user'] . " Is Admin";
    // } elseif ($_POST['user'] == $admins[2]) {
    //     echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    //     echo "This Username " . $_POST['user'] . " Is Admin";
    // } else {
    //     echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    // }
        #3rd way
        if (in_array($_POST['user'], $admins)) {
            echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
            echo "This Username " . $_POST['user'] . " Is Admin";
        }
        else {
            echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
        }
    }


// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>

<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>


<?php   
#task 5
$a = 30;
$b = 20;
$c = 10;

// if ($a + $b === $c) {

//   echo "A + B = C";

// } elseif ($a + $c === $b) {

//   echo "A + C = B";

// } elseif ($b + $c === $a) {

//   echo "B + C = A";

// } else {

//   echo "The End";

// }
echo ($a + $b === $c) ? "A + B = C" :
     (($a + $c === $b) ? "A + C = B" :
     (($b + $c === $a) ? "B + C = A" : "The End")) . "<br>";// Output
// "B + C = A"
?>



<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

// if ($age > 18) {
//     echo "The Age Is Good To Go<br>";
//     if (gettype($name) === "string") {
//         echo "The Name Is Good To Go<br>";
//         if ($country === "Egypt") {
//             echo "The Country Is Good To Go<br>";
//         }
//     }
// }

// echo ($age > 18 ) ? ("The Age Is Good To Go<br>" . 
//      ((gettype($name) === "string") ? "The Name Is Good To Go<br>" .
//      (($country === "Egypt") ? "The Country Is Good To Go<br>" ): "" ): ""): "";

echo ($age > 18)
    ? "The Age Is Good To Go<br>" .
    (gettype($name) === "string"
        ? "The Name Is Good To Go<br>" .
        ($country === "Egypt" ? "The Country Is Good To Go<br>" : "")
        : "")
    : "";
// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"
?>

<?php
#task 7
$num_one = 23;
$num_two = 5;
$op = "/";

if ($op == "+") {
    echo $num_one + $num_two;
} else if ($op == "-") {
    echo $num_one  - $num_two;
} else if ($op == "*") {
    echo $num_one * $num_two;
} else if ($op == "/") {
    echo (int) ($num_one / $num_two) . "<br> " . $num_one % $num_two;
    // echo  (($num_one - $num_one % $num_two) / $num_two) . "<br> " .$num_one % $num_two;

} else {
    echo "Invalid operator";
}
?>