<?php 
$arr = array(4,1,2,6,10,100,4);
for ($i=0; $i < count($arr)-1 ; $i++) { 
	for ($j=$i+1; $j < count($arr) ; $j++) { 
		if ($arr[$i]>$arr[$j]) {
			$t = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $t;
		}
	}
}

echo  "<pre>";
    print_r($arr);
echo "</pre>";
?>