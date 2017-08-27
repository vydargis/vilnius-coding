<?php
  // method is call a method when it is inside a class; function is called when it is on it own.

  class Person {
    function say_hello() { // is a method of the Person class
      echo "Hello form inside a class. <br>";
    }
  }

  // get_class_methods — Gets the class methods' names
  $methods = get_class_methods('Person');
  foreach ($methods as $method) {
    echo $method . "<br>";
  }

  if(method_exists('Person', 'say_hello')) {
    echo "Method does exist.<br>";
  } else {
    echo "Method does not exist.<br>";
  }

?>
