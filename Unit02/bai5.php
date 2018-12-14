<?php 
	for ($i=0; $i < 7; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			if ($j>=6-$i) {
				echo "# ";
			}else echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
 ?>