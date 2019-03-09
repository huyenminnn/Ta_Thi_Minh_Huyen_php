<!DOCTYPE html>
<html>
<head>
	<title>ptb2</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	$result = '';
	if (isset($_POST['calculate']))
	{

		$a = isset($_POST['a']) ? $_POST['a'] : '';
		$b = isset($_POST['b']) ? $_POST['b'] : '';
		$c = isset($_POST['c']) ? $_POST['c'] : '';

		if ($a==0) {
			if ($b == 0) {
				if ($c == 0) {
					$result = "Phương trình có vô số nghiệm.";
				} else $result = "Phương trình vô nghiệm.";
			} else $result = "Phương trình có 1 nghiệm: x = ".(-$c/$b);
		} else {
			$delta = ($b*$b) - (4*$a*$c);

			if ($delta < 0){
				$result = 'Phương trình vô nghiệm';
			}
			else if ($delta == 0){
				$result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
			}
			else {
				$result = 'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
				$result .= ', x2 = ' . ((-$b - sqrt($delta))/2*$a);
			}
		}
	}
	?>
	<h1>Giải phương trình bậc hai ax^2 + bx + c = 0</h1>
	<form method="post" action="">
		Nhập a: <input type="text" style="width: 50px; margin-top: 10px" name="a" value=""/><br/>
		Nhập b: <input type="text" style="width: 50px; margin-top: 10px" name="b" value=""/><br/>
		Nhập c: <input type="text" style="width: 50px; margin-top: 10px" name="c" value=""/>
		<br/><br/>
		<button type="submit" name="calculate" value="">Kết quả</button>
	</form>
	<?php echo $result; ?>
</body>
</html>