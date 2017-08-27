<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $a = 4;
      $b = 3;

      if ($a > $b) {
        // only if it is true
        echo "a is greater than b";
      } elseif ($a < $b) {
        echo "a is not greater than b";
      } else {
        echo "a is equal to b";
      }

    ?>
    <br>

    <?php // only welcome new users
      $new_user = true;
      if ($new_user) {
        echo "<h1>Welcome</h1>";
        echo "<p>We glad you decided to join us.</p>";
      }
    ?>
    <br>

    <?php // do npt divide by 0
      $numerator = 20;
      $denominator = 4;
      if ($denominator > 0) {
        $result = $numerator / $denominator;
        echo "Result: {$result}";
      }

    ?>


  </body>
</html>
