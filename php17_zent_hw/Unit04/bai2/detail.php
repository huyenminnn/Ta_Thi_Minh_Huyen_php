<?php 
	session_start();
	$i =  $_GET['key'];
	$data = $_SESSION['list'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Thông tin thành viên</h1>

		<ul style="font-size: 15px;">
			<li>Mã số sinh viên: <?php echo $data[$i]['mssv']; ?></li>
			<li>Họ và tên: <?php echo $data[$i]['name']; ?></li>
			<li>Số điện thoại: <?php echo $data[$i]['phone']; ?></li>
			<li>Email: <?php echo $data[$i]['email']; ?></li>
			<li>Giới tính: <?php echo $data[$i]['gt']; ?></li>
			<li>Địa chỉ: <?php echo $data[$i]['addr']; ?></li>
		</ul>
		<a href="list.php" class="btn btn-primary">Back</a>
</div>
</body>
</html>