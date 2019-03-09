<?php 
	session_start();
	if (isset($_POST['name'])&&isset($_POST['pwd'])) {
		$user = $_POST['name'];
		$pw = $_POST['pwd'];
	}
	if ($user == "huyen" && $pw == "huyen") {
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pw;
		setcookie('msg','Thành công.',time()+90);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="logout.php">Đăng nhập</a>
</body>
</html>
<?php
	} else {echo "Thất bại.";
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.html">Đăng nhập lại.</a>
</body>
</html>
<?php 
	}
 ?>