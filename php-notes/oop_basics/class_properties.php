<?php

  /*
  * classes also can have they own variables that belongs only to the class. these are called properties/attributes or intances variables.
  * Inside a class must define variable with keyword var.
  */


  class Person {

    var $first_name; // it just exist
    var $last_name;

    var $arm_count = 2;
    var $leg_count = 2;

    function say_hello() { // is a method of the Person class
      echo "Hello form inside the class ". get_class($this) . ".<br>"; // asking to use $this as a reference for the instances
    }

    function full_name() { // method calling other method
      return $this->first_name . " " . $this->last_name;
    }

  }

  // you reference instances of the class with sudo variable - this.

  // $this - can be used as a reference to a calling object when you want to call a method in an object.

  $person1 = new Person();
  echo $person1 ->arm_count; // do not need $ or ()
  // setting a value
  $person1->arm_count = 3;
  $person1->first_name = 'Lucy';
  $person1->last_name = 'Dow';

  echo "<br>";

  $new_person = new Person(); // arm_count will have 2, not 3
  $new_person->first_name = 'Ethel';
  $new_person->last_name = 'Jow';

  echo $person1->first_name . "<br>";
  echo $new_person->first_name . "<br>";

  echo $person1->full_name() . "<br>"; // calling a function and not an attribute
  echo $new_person->full_name()  . "<br>";





?>
