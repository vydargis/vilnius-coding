<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * PHP maintance a pointer that points to one of the items in the array. That item is refered as the current item. By default it is always a first item in the array.
    * Moving pointer to the next item how PHP keeps track of which item you are working now.
    -->

    <?php
      $ages = [4,8,15,16,23,42];

      // current: current pointer value
      // current — Return the current element in an array
      echo "1: " . current($ages) . "<br>"; // 4

      // to move pointer to next item manualy use next() function
      // next — Advance the internal pointer of an array

      next($ages);
      echo "2: " . current($ages) . "<br>"; // 8
    ?>

    <br>

    <?php
    // while loop that move the array pointer
    // similar to foreach

    while ($age = current($ages)) {
      echo $age . ", ";
      next($ages);
    }

    ?>

  </body>
</html>
