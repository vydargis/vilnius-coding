<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * print_r — Prints human-readable information about a variable
    -->

    <?php $numbers = [51,9,95,5,2,15,3]; ?>
    <!-- counts how many numbers are inside an array -->
    Count: <?php echo count($numbers); ?><br>
    <!-- returns maximum value inside an array -->
    Max value: <?php echo max($numbers); ?><br>
    <!-- returns minimum value inside an array -->
    Min value: <?php echo min($numbers); ?><br>
    <br>

    <!-- sorts values inside an array -->
    <!-- sort() and rsort() are destructive functions; means that our function does not exist anymore because sort() reorder indexed values inside our array -->
    Sort: <?php sort($numbers); print_r($numbers); ?><br>
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br>
    <br>

    <!-- split a string by string-->
    <!-- it is not array anymore, it is a string now -->
    Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br>
    <br>
    <!-- opposite to implode; make a string to array; helps with working with an array separated by comma -->
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br>
    <br>

    <!-- tells if something is in an array or not; does an array contain a value -->
    <!-- returns true or false -->
    15 in array? <?php echo in_array(15, $numbers); ?><br>
    19 in array? <?php echo in_array(19, $numbers); ?>

    <!-- usefull array functions
    * array_keys() - return all the keys or a subset of the keys of an array
    array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )
    * array_push — Push one or more elements onto the end of array
    * array_pop — Pop the element off the end of array
    * array_rand — Pick one or more random entries out of an array

    -->

  </body>
</html>
