<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
      * Constant is opposite to variable. A constanct can not change; stay in the same value.
      * Constants in PHP always are written in all captil letters.
      * The only way to set a value to the constant is to use a function; define function.
      * Constant stays define for the duration of PHP script. When script end and all the values are unset, you redifine contant on the next run of the script (next resquest - respond cycle)
    -->

    <?php
      // defines a variable
      $max_width = 980;
      // defines a constant
      define("MAX_WIDTH", 980);
      echo MAX_WIDTH;
    ?>
    <br>

    <?php // can not change the value
      MAX_WIDTH += 1;
      MAX_WIDTH = MAX_WIDTH + 1;
      echo MAX_WIDTH;
    ?>

    <?php // can not even redifine it
      define("MAX_WIDTH", 50);
      echo MAX_WIDTH;
      // Constant stays define for the duration of PHP script. When script end and all the values are unset, you redifine contant on the next run of the script (next resquest - respond cycle)
    ?>

  </body>
</html>
