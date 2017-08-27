<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Continue is used inside a loop to skip the rest of the current iteration and go immediatly to condition evaluation that starts next iteration.
    -->

    <?php
      for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
          continue; // skips number 5
        }
        echo $count . ", ";
      }
    ?>

    <br>

    <?php
      $count = 0;
      while ($count <= 10) {
        if ($count == 5) {
          $count++;  // important; without gonna be infinite loop
          continue;
        }
        echo $count . ", ";
        $count++;
      }
    ?>

    <br>

    <?php // loop inside a loop with continue
      for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0) {
          continue(1);
        }
        for ($k = 0; $k <= 5; $k++) {
          if ($k == 3) {
            continue(2); // (2) means it should continue 2 loops back
          }
          echo $i . "_" . $k . "<br>";
        }
      }
    ?>

  </body>
</html>
