<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Functions allow to return only one thing.
    * If you want to return more than one value from a function use arrays.
    * list — Assign variables as if they were an array
    -->

    <?php
      function add_subt($val1, $val2) {
        $add = $val1 + $val2;
        $subt = $val1 - $val2;
        // If you want to return more than one value from a function use arrays.
        return array($add, $subt);
      }

      // If you want to return more than one value from a function use arrays.

      // list — assign variables as if they were an array
      list($add_result, $subt_result) = add_subt(18,75);
      echo "Add: " . $add_result . "<br>";
      echo "Subt: " . $subt_result . "<br>";
    ?>

  </body>
</html>
