<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * while (expression) { // boolean expression; true or false
      statement; // is a loop
    }
    -->

    <?php
      $count = 0;
      while ($count <= 10) {
        echo "Number: " . $count . "<br>";
        $count += 1;
      }
    ?>

    <br>

    <?php
      $count = 1;
      while ($count <= 10) {
        if ($count == 5) {
          echo "FIVE, ";
        } else {
          echo $count . ", ";
        }
        $count++; // increment by 1
      }
      echo "<br>";
      echo "Count {$count}";
    ?>





  </body>
</html>
