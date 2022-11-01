#Constants are like variables except that once they are defined they cannot be changed or undefined during the script.
#A valid constant name starts with a letter or underscore (no $ sign before the constant name).
#Note: Unlike variables, constants are automatically global across the entire script.

# syntax----  define(name, value, case-insensitive)    //Default  case-insensitive  is false



<?php
define("GREETING", "Welcome to W3Schools.com!<br>");
echo GREETING;

define("HELLO", "Welcome to W3Schools.com!<br>", true);
echo hello;



#constant array
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];



#Constants are Global

define("HI", "Welcome to W3Schools.com!<br>");

function myTest() {
  echo HI;
}
 
myTest();
?>
