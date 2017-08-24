<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <ul>
      <?php
        foreach ($names as $name) {
          echo "<li>$name</li>";
        }
      ?>
    </ul>


    // shorthand
     <ul>
      <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
