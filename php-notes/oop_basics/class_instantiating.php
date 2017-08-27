<?php
  // Instantiating - creating an instance of the class.

  class Person {
    function say_hello() { // is a method of the Person class
      echo "Hello form inside a class. <br>";
    }
  }

  // instantiate a class.
  // $person1 and $person2 are two different instances of the same class Person.
  $person1 = new Person(); // creates new person; but need to assign to variable if you want to do something with it.
  $person2 = new Person();

  // get_class — Returns the name of the class of an object
  echo get_class($person1) . "<br>"; // returns Person


?>
