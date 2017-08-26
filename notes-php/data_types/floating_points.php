<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- floating points and integers (two different type of numbers) exist because computer store these numbers in different ways in memory -->

    <?php echo $float = 3.14; ?><br>
    <?php echo $float + 7; ?><br>
    <?php echo 4/3; ?><br>

    <!-- can not devide by 0; it is inlegal operation -->
    <?php echo 4/0; ?>

    <br>
    <br>
    <?php echo $float . " is 3.14"; ?><br>
    <!-- functions specific to floats -->
    <!-- round up 3.1 -->
    Round: <?php echo round($float, 1); ?><br>
    <!-- rounds to highest - 4 -->
    Ceiling: <?php echo ceil($float); ?><br>
    <!-- rounds down 3 -->
    Floor: <?php echo floor($float); ?><br>

    <br>
    <br>

    <!-- you can ask if something is a integer or is a float -->
    <!-- if it true, returns 1; if it false returns nothing (no result) -->
    <?php $integer = 3; ?><br>
    <!-- gives true of false -->
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br>
    <?php echo "Is {$float} integer? " . is_int($float); ?> <br>
    <br>

    <!-- gives true of false -->

    <?php echo "Is {$integer} float? " . is_float($integer); ?><br>
    <?php echo "Is {$float} float? " . is_float($float); ?> <br>

    <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br>
    <?php echo "Is {$float} numeric? " . is_numeric($float); ?> <br>


  </body>
</html>
