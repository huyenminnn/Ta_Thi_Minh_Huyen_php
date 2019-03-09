<!DOCTYPE html>
<html>
<head>
	<title>Tach ten</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Tách tên</h1>
	<form method="post" action="">
		Nhập tên: <input type="text" style="width: 200px; margin-top: 10px" name="name" value=""/><br>
		<br>
		<button type="submit" name="submit" value="">Kết quả</button>
		<br>
	</form>
	<?php 
	$ho = '';
	$dem = '';
	$ten = '';
	if (isset($_POST['submit'])){
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$data = explode(" ",$name);
		$a = str_word_count($name);
		$ten = $data[$a-1];
		if ($a>1) {
			$ho = $data[0];
			unset($data[$a-1],$data[0]);
			$dem = implode(" ", $data);
		}
		
		echo "<br><h3>Kết quả sau khi tách: ".$name."</h3>";
		echo "<ul><li> Họ: ".$ho."</li><br>"; 
		echo "<li>Đệm: ".$dem."</li><br>";
		echo "<li>Tên: ".$ten."</li></ul>";
	}
	?>
</body>
</html>