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

    <br>
    <!-- count length of a string -->
    Length: <?php echo strlen($third); ?><br>
    <!-- removes white or leading space -->
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
    <!-- returns everything that follows after mentioned argument -->
    Find: <?php echo strstr($third, "brown"); ?><br>
    <!-- takes thing you looking for, replace with your text, in mentioned string; takes 3 arguments; order is important -->
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br>

    <br>

    <!-- repeats string -->
    Repeat: <?php echo str_repeat($third, 2); ?> <br>
    <!-- takes words from the string from 5 to 10 letters -->
    Make substring: <?php echo substr($third, 5, 10); ?> <br>
    <!-- find a word position in a string -->
    Find position: <?php echo strpos($third, "brown"); ?> <br>
    <!-- finds where character is located and returns everything from there -->
    Find character: <?php echo strchr($third, "z"); ?> <br>


  </body>
</html>
