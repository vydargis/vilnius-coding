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

  	<form action="index.php" method="POST">

  		<div>
  			<input type="text" name="user"> 
  		</div>

  		<div>
  			<input type="text" name="surname"> 
  		</div>

  		<div>
  			<input type="submit" value="Send"> 
  		</div>

  		<div>
  			<input type="checkbox" name="vehicle" value="adult">Adult
  		</div>

  		<div>
  			<?php 
  				if (isset($_COOKIE["lankytojas"])) {
  					echo "Cookie is saved.";
  				} 
  			?>
  		</div>

  	</form>

  </body>
</html>

<?php 
	if (isset($_POST["user"]) && isset($_POST["surname"])) {
		
		$child = "vaikas";
		if(isset($_POST["adult"])) {
			$child = "suauges";
		}

		setcookie("lankytojas", $_POST["user"]." ".$_POST["surname"]." ".$child, time()+1000000, "/");
		echo "<a href='zinauapietave.php'>I kita puslapi</a>";
	}


?>