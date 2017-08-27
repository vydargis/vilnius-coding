<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * foreach() loops is the best for arrays.
    * This loop takes an array and loops each item of the array till it gets to the end.
    * foreach () loop know when to stop when reach the last item in the array
    * foreach ($array as $value) { // as - special keyword
      statement;
    }
    * Each time it loops value in the $array will be assigned to $value; $value is what we create right now fo use only inside the loop.
    * In this loop are not condition or incrementation because loop end when it reach the last item in the array
    -->

    <?php
      $ages = [4,8,15,16,23,42];

      // Each time it loops value in the $ages will be assigned to $age; $age is what we create right now fo use only inside the loop.
      foreach($ages as $age) {
        echo "Age: {$age}<br>";
      }
    ?>


    <!--
    * Working with associative arrays
    foreach ($array as $key => $value) {
      statement;
    }
    * Have to assign to variables, one for the $key and one for the $value
    -->

    <br>

    <?php
      $person = [
        "first_name" => "Joe",
        "last_name" => "Dow",
        "address" => "123 Main Street",
        "zip_code" => "902515"
      ];

      foreach ($person as $attribute =>  $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br>";
      }
    ?>

    <?php

    ?>


  </body>
</html>
