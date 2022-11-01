//The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);



?>
