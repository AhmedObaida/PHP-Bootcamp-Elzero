<?php
#taks1 
echo "<br>";

$a = "10";

echo gettype(+$a);
echo "<br>";
echo (int)$a;
echo "<br>";
?>

<?php
#taks2
echo "<br>";

$a = 10;
$b = 20;

echo $a <=> $b;
// Needed Output
?>

<?php
#taks3
echo "<br>";

$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a )* $a; // 10000
?>