<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <!--
  * switch is a function name
  * (value) is an argument follow by value
  * switch statement structure
  switch (value) {
  case test_value1:

    statement
  case test_value2:
    statement
  default:
    statement
  }
  -->

  <?php
    $a = 3;

    switch ($a) {
      case 0:
        echo "a equals 0 <br>";
      case 1:
        echo "a equals 1 <br>";
      case 2:
        echo "a equals 2 <br>";
      case 3:
        echo "a equals 3 <br>";
      default:
        echo "No value";
    }
  ?>


  </body>
</html>
