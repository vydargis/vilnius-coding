<!-- namu darbui php1 -->








<!doctype html>
<html lang="lt">
  <head>
    <meta charset="utf-8">
    <title>Namu darbai</title>
    <meta name="description" content="Namu darbai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>

    <h1>NOOO</h1>

    <?php 
      session_start();

      if(isset($_SESSION["username"])) {
        echo "Hello, ".$_SESSION["username"];
      } else {
        header("Location: test.php");
      }
    ?>
  </body>
</html>


