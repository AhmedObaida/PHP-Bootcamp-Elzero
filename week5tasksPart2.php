
<?php
#task1
$index = 10;

for($index= 10 ; $index >=1 ; $index--){
    echo $index . "<br>";
}

?>



<?php
#task 2
$index = 0;
// for( ; $index <=20 ; $index+=2){
//     if($index == 0){
//         continue;
//     }
//     echo $index . "<br>";
// }

// echo "<br>";

// while ($index <= 20){
//     if($index == 0){
//         $index+=2;
//         continue;
//     }
//     echo $index . "<br>";
//     $index+=2;

// }

do {
    echo $index+2 . "<br>";
    $index+=2;
} while ($index < 20);


?>


<?php
#task 3
$num = 2;
$i = 1;
while ($num < 520) {
    echo  ($num-1) . "<br>";
    $num = $num + (3 * $i);
    $i = $i * 2;
}
//better way
$num = 2;
while ($num < 520) {
    $num--;
    echo  $num . "<br>";
    $num = $num * 2 + 2 + 1; // we add another one here because we use $num-- in the top of the loop
    // if($num == 2)
    // {
    //     $num--;
    //     echo  $num . "<br>";
    //     $num = $num * 2 + 2;
    //     continue;
    // }
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

//Better way
$num = 2; // متغير غير معدل
$counter = 1; // متغير مساعدة لتوليد الأرقام

while ($num < 520) {
    echo $counter . "<br>"; // طباعة الرقم
    $counter = $counter * 2 + 2; // تحديث القيمة التالية حسب النمط
    $num = $counter ;

}
?>


<?php
#task 4
$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i >= $end; $i--) {
    if($i == $start){
        echo $i . "<br>";
        continue;
    }
    echo $end. $i . "<br>";

    if ($i == $stop) {
        break;
    }

}
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03
?>


<?php
#task 5
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++) {
    if ($i== $start  || is_string($mix[$i])) {
        continue;
    }
    echo $mix[$i] . "<br>";
}
// Output
// 2
// 3
// 4
?>

<?php
#task 6

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $name => $amount) {
    echo "The Name Is $name And I Need $amount Pound From Him" . "<br>";
}
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
?>


<?php
#task 7
$letters = 0;
$numbers = 0;
$mix = [1, 2, "A", "B", "C", 3, 4];

for ($i = 0 ; $i < count($mix) ; $i++){
    if (is_string($mix[$i])) {
        $letters++;
        continue;
    }
    echo $mix[$i] . "<br>";
    $numbers++;
}

echo $numbers . " Numbers Printed" . "<br>";
echo $letters . " Letters Ignored" . "<br>";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
?>



<?php
#task 8

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $num) {
    if ($num % 2 == 0)
    {
        echo $num / 2 . "<br>";
    }
}
// Output
// 6
// 10
// 15
?>


<?php
#task 9

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i =$nums[$help_num]; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
    if($names[$i] == "Osama"){
        break;
    }
}
// // Output
// "Sayed"
// "Osama"
?>

<?php
#task 10

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $key => $num) {
    $index = $help_num - $key;
    echo "$num + $nums[$index] = " . ($num + $nums[$help_num]) .  "<br>";
}
// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
?>