<?php 
	$arr = array(1,4,2,6,9,100,5);
	$n = count($arr);
	echo "Mảng đầu vào: ";
	for ($i=0; $i < $n; $i++) { 
		echo $arr[$i].' ';
	}
	for ($i=0; $i < $n/2; $i++) { 
		$t = $arr[$i];
		$arr[$i] = $arr[$n-$i-1];
		$arr[$n-$i-1] = $t;
	}

	echo "<br>Mảng in ngược: ";
	for ($i=0; $i < $n; $i++) { 
		echo $arr[$i].' ';
	}
?>