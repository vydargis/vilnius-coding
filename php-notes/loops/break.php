<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Break is used to stop execution. Break end all iterations.
    -->
    <?php
      for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
          break; // returns 0, 1, 2, 3, 4
        }
        echo $count . ", "; // returns 0, 1, 2, 3, 4
      }
    ?>

  </body>
</html>
