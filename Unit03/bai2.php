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
		$data = explode(" ", $s);
		foreach ($data as $key => $value) {
			if ($value == "") {
				unset($data[$key]);
			}
		}
		$s = strtolower(implode(" ", $data));
		$s = ucwords($s).".";
		echo $s;
	}
	?>
</body>
</html>