<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Default takes place if nothing takes that spot. No value get set at all.
    -->

    <?php
      function paint($room = "office", $color = "red") { // red is default value if in the function call argument is not provided
        return "The color of the {$room} is {$color}.<br>";
      }

      echo paint(); // default behavior
      echo paint("bedroom", "blue"); // custom behavior
      // required values must be listed first
      echo paint("blue");
    ?>

  </body>
</html>
