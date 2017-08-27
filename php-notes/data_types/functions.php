<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $first = "The quick brown fox";
      $second = " jumped over the lazy dog.";

      $third = $first;
      // concatenation and assignment on the same time
      $third .= $second;
      echo $third;

    ?>
    <br>

    <!-- string functions -->
    <!-- make all letter lowercase  -->
    Lowercase: <?php echo strtolower($third);?><br>
    <!-- make all letter uppercase -->
    Uppercase: <?php echo strtoupper($third);?><br>
    <!-- make first letter uppercase -->
    Uppercase first: <?php echo ucfirst($third);?><br>
    <!-- make every word first letter to uppercase -->
    Uppercase words: <?php echo ucwords($third);?><br>
  </body>
</html>
