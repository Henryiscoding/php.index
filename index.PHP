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




<?php

$lightcolour = "green";

switch ($lightcolour){
  case 'red':
    echo "Stop";
    break;
  case 'yellow':
    echo "Slow down";
    break;
  case 'green':
    echo "Go";
    break; 
}






<?php


 $age = 8;

 if ($age<2) {
    echo "No fee needed";}
    elseif ($age>=2 && $age<=12 ) {
    echo "R20 please"; }
    elseif ($age>=13 && $age<=17 ) {
      echo "R30 please"; }
      elseif ($age>=18 && $age<=25 ) {
        echo "R40 please"; }
       elseif ($age>=26 && $age<=64 ) {
         echo "R60 please";}
         elseif ($age>=65) {
           echo "R30 please";
 }
