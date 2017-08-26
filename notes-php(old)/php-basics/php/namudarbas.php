<?php 

  $autos = array("BMW", "Audi");
  foo($autos);

  function foo($local_auto) {
  	echo "<ul>";
    for ($i = 0; $i < count($local_auto); ++$i) {
    	if($local_auto[$i] == "BMW") {
    		echo "<li>".$local_auto[$i]." - komanija</li>";
    	} 

    	if($local_auto[$i] == "Audi") {
    		echo "<li>".$local_auto[$i]." - komanija</li>";
    	}
    }
    echo "</ul>";
  }

?>

