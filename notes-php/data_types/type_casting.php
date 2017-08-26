<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
      * Type juggling - process when PHP on the fly converts one type to other.
      * Type casting - when you explicitly set a type yourself. Possible to do type casting in two ways:
      1) settype($var, "integer")  // "integer" is a string, so in quotes
      2) (integer) $var  // integer is not a string, it is just instruction for PHP
      * Values that we can provide for type casting are: string, int (integer), float, array, bool (boolean)
    -->
    <h3>Type Juggling</h3>
    <?php $count = "2 cats"; ?>
    Type: <?php echo gettype($count); // returns string?><br>
    <?php $count += 3; ?><br>
    Type: <?php echo gettype($count); // returns integer?><br>
    <?php $cats = "I have " . $count . " cats."; ?>
    Cats: <?php echo gettype($cats); // returns string ?><br>
    <br>
    <br>

    <h3>Type Casting</h3>
    <!-- 1) settype($var, "integer")  // "integer" is a string, so in quotes -->
    <?php settype($count, "integer"); // in quotes set value type ?>
    count: <?php echo gettype($count); ?><br>
    <!-- 2) (integer) $var  // integer is not a string, it is just instruction for PHP -->
    <?php $count2 = (string) $count; ?><br>
    count: <?php echo gettype($count); ?><br>
    count2: <?php echo gettype($count2); ?><br>

    <?php $test1 = 3; ?><br>
    <?php $test2 = 3; ?><br>
    <?php settype($test1, "string"); ?><br>
    <?php (string) $test2; ?><br>
    test1: <?php echo gettype($test1); ?><br>
    test2: <?php echo gettype($test2); ?><br>



  </body>
</html>
