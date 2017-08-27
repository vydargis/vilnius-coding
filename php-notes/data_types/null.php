<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * null - not having a value; it is not 0, not empty string, it is actually a lack of not having a value
    * Empty in PHP:
    1) ""
    2) null
    3) 0
    4) 0.0
    5) "0"
    6) false
    7) array()
    -->

    <?php

      $var1 = null;
      $var2 = "";

     ?>

     <!-- test if variable is a null -->
     var1 null? <?php echo is_null($var1); ?><br>
     var2 null? <?php echo is_null($var2); ?><br>
     <!-- $var3 is not set yet; returns 1; it is a null -->
     var3 null? <?php echo is_null($var3); ?><br>
     <br>
     <!-- isset — Determine if a variable is set and is not NULL -->
     var1 is set? <?php echo isset($var1); ?><br>
     var2 is set? <?php echo isset($var2); ?><br>
     var3 is set? <?php echo isset($var3); ?><br>
     <br>

     <?php //empty: "", null, 0, 0.0, "0", false, array() ?><br>
     <?php $var3 = "0"; ?><br>
     <!-- they all empty -->
     var1 emtpy? <?php echo empty($var1); ?><br>
     var2 emtpy? <?php echo empty($var2); ?><br>
     var3 emtpy? <?php echo empty($var3); ?><br>
  </body>
</html>
