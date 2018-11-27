


<?php 

// String data type
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;


// Integer data type

$x = 5985;
var_dump($x);

// float data type 

$x = 10.365;
var_dump($x);



// Boolean

$x = true;
$y = false;

// php array

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);



// object

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;



// Null object
$x = "Hello world!";
$x = null;
var_dump($x);


?>



