<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Array is an ordered, integer-indexed collection of objects
    * In other words, you can tan an objects and put them into the group. And keep they position in that group in the same order that we can refer into those objects by they positions.
    * Objects are indexed according which position they hold in the array.
    * Array can contain a string, a number, an other array.
    * Array can be assigned to a variable.
    * Array are numbered from number 0;
    * The power of arrays is that set of information can be referenced by the single variables.
    * Array keep they information in the same order unless we changed.

    -->

    <!-- IMPORTANT -->
    <!--
    *  Array can be written like this from 5.4 PHP
      $array = [1,151,59];
    -->

    <?php
      $number = array(4,65,84,26,1);
      echo $number[2]; // provide index that you want to be return; in this case, position 2 -> 84
    ?>

    <br>

    <?php $mixed = array(6, "fox", "dog", array("x", "y", 62)); ?><br>
    <?php echo $mixed[2] ?><br>

    <!-- returns whats is inside of other array inside $mixed -->
    <?php echo $mixed[3][1] ?><br> <!-- other array inside $mixed -->

    <!-- add thing inside array -->
    <?php $mixed[2] = "cat"; ?>
    <!-- creates a new slot (position 5) inside the array -->
    <?php $mixed[5] = "chicken"; ?>
    <!-- appends an empty thing at end of the array -->
    <?php $mixed[] = "horse"; ?>

    <!-- if you want to see array itself;
    use print_r - stands for print readable -->
    <pre>
      <?php echo print_r($mixed); ?><br>
    </pre>

  </body>
</html>
