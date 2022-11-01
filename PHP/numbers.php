
#php numbes--Integers, Floats, and Number Strings.
#PHP has the following predefined constants for numbers:--  PHP_INT_MAX , PHP_INT_MIN , PHP_INT_SIZE       ,,, PHP_FLOAT_MAX , PHP_FLOAT_MIN
#A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.  for this we use is_finite() & is_infinite() 
#PHP has the following functions to check if the type of a variable is particular type number or not ---   is_int() , is_long() ,    is_float() ,is_double()
#The PHP is_numeric() function can be used to find whether a variable is numeric
#NaN stands for Not a Number. NaN is used for impossible mathematical operations.  for this we use is_nan()



<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;  #infinity
var_dump($x);


$x = acos(8);   #nan
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));  #isnumeric

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


?>
