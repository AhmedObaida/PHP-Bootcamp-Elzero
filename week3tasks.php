<?php
   $courses  = "Elzero Courses  ";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $courses;?>">
    <title>Welcome To <?php echo $courses;?></title>
  </head>
  <body>
    <h1><?php echo $courses;?></h1>
    <p>Here In <?php echo $courses;?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $courses;?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $courses;?> @</footer>
  </body>
</html>

<?php
$name = "elzero";
$$name = "Web";
echo $elzero;
echo "<br>";
echo $$name ;
echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

?>

<?php
echo "<br>";

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
?>


