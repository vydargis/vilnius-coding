<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Order and number matters when defining arguments in the function.
    * Must call the same number of argument and in the same order.
    -->

    <?php
      function say_hello($word) { // $word is assigned inside the function
        echo "Hello {$word}<br>";
      }

      $name = "John Doe";
      say_hello($name);
    ?>
    <br>

    <?php
      function better_hello($greeting, $target, $punct) {
        echo $greeting . " " . $target . $punct . "<br>";
      }

      better_hello("Hello", $name, "!");
      better_hello("Hello", $name, null); // null in this case returs nothing; same as an empty string ""
    ?>

  </body>
</html>
