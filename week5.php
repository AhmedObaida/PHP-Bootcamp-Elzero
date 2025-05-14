
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['lang'] == 'en') {
        header('Location: en.php');
        exit();
    }
    echo $_POST['username'];
    echo "<br>";
    echo $_POST['lang'];  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username">
        <select name="lang" id="">
            <option value="en">English</option>
            <option value="ar">Arabic</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

## 📘 Lesson #033 - If, Elseif, Else - Alternate Syntax

<?php if (true):  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hello
</body>

</html>

<?php endif; ?>


<?php
if(10>5):
    echo "10 is greater than 5";
endif;
?>


<?php
## 📘 Lesson #040 - Loop Foreach
$countries = ['EG', 'US', 'FR', 'DE'];

$countries_with_discount = ['EG' => 0.1, 'US' => 0.2, 'FR' => 0.3, 'DE' => 0.4];

foreach ($countries as $country) :
echo $country . '<br>';
endforeach;

foreach ($countries_with_discount as $country => $discount) :
echo $country . ' - ' . $discount . '<br>';
endforeach;
?>


<?php
## 📘 Lesson #042 - include and require
include("test.php"); // $a = 10;

echo $a . '<br>';

$a = 20;

include("test.php"); // $a = 10;

echo $a . '<br>';

echo "Continue";

include_once("test.php"); // $a = 10;

echo $a . '<br>';

$a = 20;

include_once("test.php"); // $a = 10;

echo $a . '<br>';

echo "Continue";
?>
