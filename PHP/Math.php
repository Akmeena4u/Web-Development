#PHP has a set of math functions that allows us to perform mathematical tasks on numbers.
#The pi() function returns the value of PI
#The min() and max() functions can be used to find the lowest or highest value in a list of arguments
#The abs() function returns the absolute (positive) value of a number
#The sqrt() function returns the square root of a number
#The round() function rounds a floating-point number to its nearest integer
#The rand() function generates a random number

<?php
echo(pi()); // returns 3.1415926535898

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo(abs(-6.7));  // returns 6.7

echo(sqrt(64));  // returns 8

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

echo(rand());
?>
