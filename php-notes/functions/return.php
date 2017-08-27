<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * return - exits function imediatly;
    * If called from within a function, the return statement immediately ends execution of the current function, and returns its argument as the value of the function call.
    * A function can only return a single value.
    -->

    <?php
      function add($val1, $val2) {
        $sum = $val1 + $val2;
        // the best practice to always have return statment in your function
        return $sum;
        // it is better to leave you echo outside of your function
      }

      $result = add(3,4);
      $result2 = add(3, $result);
      echo $result2;
    ?>

  </body>
</html>
