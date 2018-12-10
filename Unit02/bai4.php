<?php 
	function gt($n){
		if ($n == 0||$n == 1) {
			return $n;
		} else{
			return $n*gt($n-1);
		}
	}

	$test = 10;
	$s = 0;
	for ($i=1; $i <= $test; $i++) { 
		$s += 1/gt($i);
	}
	echo "Kết quả test với n = 10: ".$s;
 ?>