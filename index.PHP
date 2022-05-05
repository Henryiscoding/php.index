<?php
//string;

$name = "  Bob  ";
$newname = trim($name);



//integer;

$howold = "35";



//string;

$job = "plumber";



//string;

$carMake = "Toyota";

$carColour = "RED ";

$car = strtolower($carColour) . $carMake;


//string;

$happy = "true";

if ($happy == "true")
{$happy = "happy";
} else
 { $happy = "not happy";}


//floatval;

$time = "This many";
$newtime = strlen("$time");




//string;

$retirement = "65";

$timeleft = $retirement - $howold;



//string;

$oldstory = "$newname is a $job. He drives a $car and works $newtime hours a day. He is $howold years old and is $timeleft years from retirement. He is $happy with his life.";


echo $oldstory;

?>