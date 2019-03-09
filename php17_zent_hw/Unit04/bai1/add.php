<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Thực hành về gửi dữ liệu dùng POST</h1>
		<?php 
			if (!isset($_POST['sm'])) {
		?>
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Mã sinh viên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="mssv" required="">
			</div>

			<div class="form-group">
				<label for="">Họ và tên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập tên" name="name" required="">
			</div>
	
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone" required="">
			</div>  

			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="Nhập email" name="email" required="">
			</div>

			<div class="form-group">
				<label for="">Giới tính</label><br>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" checked value="Nam">Male</label>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" value="Nữ">Female</label>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" value="LGBT">Other</label>
			</div>

			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="addr" required="">
			</div>

			<button type="submit" class="btn btn-primary" name="sm">Lưu thông tin</button>
		</form>
		
		<?php 
			} else {
		?>
		<h3 style="text-align: center;">THÔNG TIN SINH VIÊN</h3>
		<ul style="font-size: 15px;">
			<li>Mã số sinh viên: <?php echo $_POST['mssv']; ?></li>
			<li>Họ và tên: <?php echo $_POST['name']; ?></li>
			<li>Số điện thoại: <?php echo $_POST['phone']; ?></li>
			<li>Email: <?php echo $_POST['email']; ?></li>
			<li>Giới tính: <?php echo $_POST['optradio']; ?></li>
			<li>Địa chỉ: <?php echo $_POST['addr']; ?></li>
		</ul>
		<?php
			}
		 ?>
	</div>
</body>
</html>