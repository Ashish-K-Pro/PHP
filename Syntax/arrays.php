<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";



// get length of the array

echo count($cars);

$arrlength = count($cars);


for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}


// Associative Arrays


$age = array("Ashish"=>"27", "Ben"=>"37", "Joe"=>"43");
echo "Ashish " . $age['Ashish'] . " years old.";



// Sorting in Array

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$lenghtOfArray = count($numbers);
for($x = 0; $x < $lenghtOfArray; $x++)
{
 echo $numbers[$x];
}


?>