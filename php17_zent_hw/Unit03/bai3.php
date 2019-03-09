<!DOCTYPE html>
<html>
<head>
	<title>Tinh chỉnh</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post" action="">
		Nhập chuỗi: <input type="text" style="width: 200px; margin-top: 10px" name="s" value=""/><br>
		<br>
		<button type="submit" name="submit" value="">Kết quả</button>
		<br>
	</form>
	<?php 
	
	if (isset($_POST['submit'])){
		$s = isset($_POST['s']) ? $_POST['s'] : '';
		$flag = true;
		$n = strlen($s);
		for ($i=0; $i < $n/2; $i++) { 
			if ($s[$i] != $s[$n-1-$i]) {
				$flag = false;
			}
		}
		if ($flag) {
			echo "<br>Chuỗi \"".$s."\" là chuỗi Palindrome.";
		} else echo "<br>Chuỗi \"".$s."\" không phải chuỗi Palindrome.";
	}
	?>
</body>
</html>