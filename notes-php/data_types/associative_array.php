<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * Associative array is an object-indexed collection of objects. Instead of normal array (number indexed), associative array is object-indexed. It means, they will be indexed by the label of some sort.

    * Associative array are not in the same order, they can be rearranged. Each of these objects will have a label on it and by this label we can find it.

    * The call this label - key. And content what is inside an object - value.

    * key-value pair make up our associative array.

    * Array and associative array have they uses:
    1. when order is matter for us use - array
    2. when having a reference label is most important use - associative array; example, information about a user
    -->

    <?php
      // associative array is indexed by the key
      $assoc = [
        "first_name" => "Joe",
        "last_name" => "Dow"
      ];

    ?>

    <br>

    <!-- associative array is indexed by a key -->
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"] ; ?>
    <br>

    <!-- assign a new value -->
    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"] ; ?>

    <br>

    <!-- does not work, because associative array is indexed by a key -->
    <?php echo $assoc[1]; ?>

    <br>

    <!-- this works, because it is index with right key -->
    <?php $numbers = [4, 8, 200]; ?>
    <?php $numbers = [0 => 4, 1 => 8, 2 => 200]; ?>

    <?php echo $numbers[0]; ?>

  </body>
</html>
