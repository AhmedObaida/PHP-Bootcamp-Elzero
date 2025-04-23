# 6 to 12 
#Task 1 
<?php
    echo"<br>";
    echo (int) (15.2 + 14.7 + (10.5 + 10.5)); // 50
    echo"<br>";
    echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))) ; // Integer
    echo"<br>"; 
?>

#Task 2
<?php
    echo"<br>";
    echo gettype(100);
    echo"<br>";
    var_dump(100);
?>

#Task 3
<?php
echo"<br>";
echo 'Hello "Elzero" \\\\ """ We Love "$$PHP" ';

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>

#task 4
<?php
echo"<br>";
echo nl2br("We \n Love \n Elzero \n Web \n School") ;
  
?>

#task 5
<?php
echo"<br>";

echo<<<'nowdoc'
   
    Hello "'Elzero'" \n
    We Love $Programming$
    Languages Specially "PHP"
nowdoc


?>

#task 6
<?php
echo"<br>";

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

?>

#task 7
<?php
echo"<br>";

echo (bool)"Hello PHP";
echo '<br>';
echo gettype(+(bool)"Hello PHP") ;

// Needed Output

?>

#task 8

<?php  

echo "<br>";
$technologies = array(  
    "FrontEnd" => array(  
        "HTML",  
        "CSS",  
        "JS" => array(  
            "Vuejs" => array(  
                "v2",  
                "v3"  
            ),  
            "Reactjs",  
            "Svelte"  
        )  
    ),  
    "BackEnd" => array(  
        "PHP",  
        "MySQL",  
        "Security"  
    ),  
    "0" => "Git",  
    "1" => "Github",  
    "Testing" => array(  
        "Unit Testing",  
        "End To End",  
        "Integration"  
    )  
);  

// Output the array  
echo "<pre>";
print_r($technologies);  
?>  