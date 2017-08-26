<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * booleans are most useful with conditions
    -->

    <?php
      // assign boolean to a variable
      $result1 = true;
      $result2 = false;

    ?>
    <!-- retuns 1 -->
    Result1: <?php echo $result1; ?><br>
    <!-- retuns nothing -->
    Result2: <?php echo $result2; ?><br>

    <!-- checks if something is a boolean -->
    reuslt2 is boolean? <?php echo is_bool($result2); ?><br>

  </body>
</html>
