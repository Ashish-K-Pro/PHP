<?php


// $GLOBALS

$x = 75;
$y = 25;

function addValues()
{

$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}

addValues();

echo $z;




// $_SERVER


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];



?>