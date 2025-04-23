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




<!-- lesson 15 -->

<?php 
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
?>



<?php  
// Variable Variable  
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