<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    echo  "hello <br>";

    // blank space is still a string
    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;
    echo $phrase;
    ?>
    <br>

    <?php
    // variable replacment
    // because variable has $ in front of it, php will see it as variable despite that this variable is inside double quotes
    // this only works with double quotes
      echo "$phrase Again <br>";

    // same but with single quotes
      echo '$phrase Again <br>';

    // clearly differentiate between what is variable and what is not use {}
    echo "{$phrase}Again<br>";

    ?>



  </body>
</html>
