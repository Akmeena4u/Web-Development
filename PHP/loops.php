#Loops are used to execute the same block of code again and again, as long as a certain condition is true.
#in php loops are -- for, while ,do while , for each

<?php
echo "while loops in php";echo"<br>";
//echo 1;echo"<br>";
// echo 2;echo "<br>";
// echo 3;echo "<br>";
// echo 4;echo "<br>";
// echo 5;echo "<br>";

#while loop

$i = 0; 
while($i<5){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=1; 
} 
echo "while loop has ended<br>";

#for loop

echo "This is for loop in action <br>";

for ($index=1; $index < 6; $index++) { 
    // for(initialization;condition; updation)
    echo "The number is $index <br>";
}

#do..while loop
echo "For loop has ended<br>";

echo "Welcome to do while loops <br>;

$i = 0;
do{
    echo "$i <br>";
    $i++;
}while($i<5);

echo "do..while loop has ended<br>";


#for ..each
#The foreach loop works only on arrays and objects, and is used to loop through each key/value pair in an array.


echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

for ($i=0; $i < count($arr); $i++) { 
     echo $arr[$i];
     echo "<br>";
 }

// Better way to do this - foreach loops
foreach ($arr as  $value) {
    echo "$value <br>";
}




?>


