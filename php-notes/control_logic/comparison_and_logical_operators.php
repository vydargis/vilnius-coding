<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <!--
  * equal: == compares two values 123 == "123" // true
  * identical: === have to be the same type 123 === "123" // false
  * compare: > < > >= <= <>
  * not equal: !=
  * not identical: !==
  -->

  <!-- Logical Operators
  * and: && - is a > b && (and) c > d // returns true; otherwise false; both have to be true
  * or: || - just one has to be true
  * not: ! - flips around to make it opposite
  -->
  <?php
    $a = 4;
    $b = 3;
    $c = 2;
    $d = 90;

    if (($a > $b) && ($c > $d)) {
      echo "a is larger than b AND ";
      echo "c is larger than d";
    } else {
      echo "Not correct.";
    }

    if (($a > $b) || ($c > $d)) {
      echo "a is larger than b OR ";
      echo "c is larger than d";
    } else {
      echo "Not correct.";
    }

  ?>

  <br>
  <br>

  <?php // this checking is good to set default value
    $e = 100;
    if (!isset($e)) { // means if (e) not set than
      $e = 200;
    } // if $e = 100; condition not gonna be checked

    echo $e; // 100

  ?>

  <br>

  <?php
  // do not reject 0 or 0.0
  // empty — Determine whether a variable is empty
  $quantity = 0;
  if (empty($quantity) && !is_numeric($quantity)) /*checks if quantity is empty and if it is not numeric than*/ {
    echo "You must enter a quantity.";
  } else {
    echo "Wrong";
  }
  ?>



  </body>
</html>
