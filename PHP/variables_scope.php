#In PHP, variables can be declared anywhere in the script

#Global scope--A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

<!DOCTYPE html>
<html>
<body>

<?php
$x = 544; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>


#Local scope--A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

<?php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>



#The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):

<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

#PHP also stores all global variables in an array called $GLOBALS[index].
#The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>



#PHP The static Keyword
#Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

#To do this, use the static keyword when you first declare the variable:

<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>







