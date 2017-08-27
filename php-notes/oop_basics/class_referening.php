<?php

  class Person {
    function say_hello() { // is a method of the Person class
      echo "Hello form inside the class ". get_class($this) . ".<br>"; // asking to use $this as a reference for the instances
    }
  }

  // you reference instances of the class with sudo variable - this.

  // $this - can be used as a reference to a calling object when you want to call a method in an object.

  $person1 = new Person();
  $person1->say_hello();





?>
