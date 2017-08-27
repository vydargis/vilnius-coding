<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * for (initial; test; each) {
      statement;
    }
    -->

    <?php
      for ($count = 0; $count <= 10; $count++) {
        echo $count . ", <br>";
      }
    ?>

    <br>

    <?php
      for ($count = 1; $count < 20; $count++) {
        if ($count % 2 === 0) { // == 0 means that nothing left over; divided by 2 and no reminder
          echo "{$count} is even. <br>";
        } else {
          echo "{$count} is odd. <br>";
        }
      }
    ?>


  </body>
</html>
