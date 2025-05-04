<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo "utf-8"; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "My First PHP Page"; ?></title>
  </head>
  <body>
    <div><?php echo "We Love"; ?></div>
    <div><?php echo "Elzero Channel" ;?></div>
  </body>
</html>

<?php
// ## First Comment
# // # Second Comment
/* /* /* Third Comment */
////// Fourth Comment

echo <<< "heredoc"

<h1>First Line</h1>
<h2>Second Line</h2>
<h3>Third Line</h3>
<h4>Fourth Line</h4>
heredoc;


echo <<< 'nowdoc'


nowdoc;

echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
echo gettype((int)(15.2 + 14.7) + (int)(10.5 + 10.5)); // Integer
echo "<br>";
echo ' Hello "Elzero" \\\\ """ We Love "$$PHP" <br>';


echo nl2br("We \n Love \n Elzero \n Web \n School\n") ;


echo <<< 'nowdoc'
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
nowdoc;
echo "<br>";

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// Needed Output
?>

<!-- lesson 14 -->
 <?php $username = "Obaida" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP <?php echo $username; ?> </title>
</head>
<body>
    <p> welcome <?php echo $username; ?> </p>
    <div>
        <?php include("score.php"); ?>
    </div>
</body>
</html>



<?php 
## ✅ #015 – Variable Variable

echo "<br>"; 
    $a = "osama";
    echo $a;
    $$a = "elzero";                       
    echo "<br>";
    echo $osama;
    $$$a = "school";
    echo "<br>";
    echo $elzero;

    echo "hello {$$a}";


// Takes the value of a variable and treats that as the name of a variable  

$a = "osama";  
$$a = "elzero";  
$$$a = "school";  

echo $a; // osama  
echo "<br>";  
echo $$a; // elzero  
echo "<br>";  
echo "{$$a}"; // elzero  
echo "<br>";  
echo $school; // school  
echo "<br>";  
echo "Hello, {$a}"; // Hello, osama  
echo "<br>";  
echo "Hello, {$$a}"; // Hello, elzero  


?>  

<?php
## ✅ #016 – Assign By Value And By Reference

echo "<br>";
function addOne(&$number) {
  $number++;
}

$x = 5;
addOne($x);

echo $x; // 6
?>



<?php
## 📘 Lesson #017 - Predefined Variables And Test
echo "<br>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER["HTTP_ACCEPT"];
echo "<br>";

echo $_POST["name"];
?>

<form action="#" method="post">
  <input type="text" name="name">
  <input type="submit">
</form>



<?php
## 📘 Lesson #018 - Introduction To Constants

echo "<br>";
define("DB_NAME", "elzero");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

echo DB_NAME;
echo DB_USER;
echo DB_PASS;
echo DB_HOST;
?>


<?php
## 📘 Lesson #019 - Predefined And Magic Constants And Reserved Keywords

  echo PHP_VERSION ;
  echo "<br>";
  echo __DIR__;
  echo "<br>";

  echo __FILE__;
  echo "<br>";

  
  echo __LINE__;
  echo "<br>";

  echo php_uname();
  echo  "<br>";
  echo PHP_INT_MAX; // 9223372036854775807


?>