
#Conditional statements are used to perform different actions based on different conditions.
# in php we have --if, if...else,if...elseif..else ,switch

<?php
$t = date("H");

#if 
if ($t < "20") {
  echo "Have a good day!";
}

#if...else
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

#if...elseif..else
$age = 24;

If ($age>18){

Echo "you can drink water with chai and alcohol";

}

Elseif($age>13){

Echo "you can drink chai only with water. No alcohol for you";

}

Else{

Echo "you can drink water only";

}
#Use the switch statement to select one of many blocks of code to be executed.
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


?>
