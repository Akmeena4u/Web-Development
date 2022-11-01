#The break statement can also be used to jump out of a loop.
//The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
