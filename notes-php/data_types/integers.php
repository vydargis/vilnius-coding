<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $var1 = 3;
      $var2 = 4;

    ?>

    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>

    <br>

    Absolute value: <?php echo abs(0 - 300); ?><br>
    Exponential: <?php echo pow(2, 8); ?><br>
    Square root: <?php echo sqrt(100); ?><br>
    <!-- returns reminder; in this case 6 -->
    Modulo: <?php echo fmod(20, 7); ?><br>
    Random: <?php echo rand(); ?><br>
    Random (min, max): <?php echo rand(1, 10); ?><br>

    <br>

    <!-- assignment operator -->
    += <?php $var2 +=4; echo $var2; ?><br>
    -= <?php $var2 -=2; echo $var2; ?><br>
    *= <?php $var2 *=9; echo $var2; ?><br>
    /= <?php $var2 /=7; echo $var2; ?><br>

    <br>
    <!-- incrementation / decrementation -->
    Increment (++): <?php $var2++; echo $var2; ?><br>
    Decrement (--): <?php $var2--; echo $var2; ?>

    <br>

    1 - is a integer number
    "1" - is just a character; not a number

    <?php
    // not relay on php to convert strings into integer
      // converts to 2
      echo 1 + "1";
      // converst to 4; "houses" will do be showen
      echo 2 + "2 houses";
    ?>






  </body>
</html>
