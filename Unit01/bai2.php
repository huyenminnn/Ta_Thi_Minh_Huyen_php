<!DOCTYPE html>
<html>
<head>
	<title>ptb2</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	$result = '';
	if (isset($_POST['calculate'])){
		$a = isset($_POST['a']) ? $_POST['a'] : '';
		$b = isset($_POST['b']) ? $_POST['b'] : '';

		if ($a == 0) {
			// if (b==0) {
			// 	$result = 'Phương trình có vô số nghiệm.'
			// } else {
			// 	$result = 'Phương trình vô nghiệm.'
			// }
			$result = ($b==0)?'Phương trình có vô số nghiệm.':'Phương trình vô nghiệm.';
		} else {
			$result = 'Phương trình có 1 nghiệm là: x = '.(-$b/$a);
		}
	}
	?>
	<h1>Giải phương trình bậc nhất ax + b = 0</h1>
	<form method="post" action="">
		Nhập a: <input type="text" style="width: 50px; margin-top: 10px" name="a" value=""/><br/>
		Nhập b: <input type="text" style="width: 50px; margin-top: 10px" name="b" value=""/><br/>
		<br/>
		<button type="submit" name="calculate" value="">Kết quả</button>
	</form>
	<?php echo $result; ?>
</body>
</html>