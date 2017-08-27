<?php
  class Person {

  }

  // get_declared_classes — Returns an array with the name of the defined classes
  $classes = get_declared_classes();
  foreach($classes as $class) {
    echo $class . "<br>";
  }

  // class_exists — Checks if the class has been defined
  if (class_exists("Person")) {
    echo "That class has been defined.<br>";
  } else {
    echo "Class not defined!<br>";
  }

?>
