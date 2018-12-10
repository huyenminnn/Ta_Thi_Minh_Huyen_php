<?php 
	echo "Bảng cửu chương:<br>";
	echo "<table>";
	for ($i=1; $i <= 10; $i++) { 
		echo "<tr>";
		for ($j=2; $j <= 9 ; $j++) { 
			echo "<td>";
			echo $j.' x '.$i.' = '. ($i*$j)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
 ?>