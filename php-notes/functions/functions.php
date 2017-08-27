<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--
    * A function is a code that performs a specific task which been packed up into single unit. That can be called up on whenever that task is needed.
    * function name($arg1, $arg2) { // these are arguments that the function is gonna except
      statement;
    }
    -->

    <?php
      function say_hello() {
        echo "Hello World<br>";
      }

      say_hello();
      
      function say_hello_to($word) {
        echo "Hello {$word}<br>";
      }

      say_hello_to("Word");
    ?>

  </body>
</html>
