<?php 
	session_start();
	if (isset($_GET['key'])) {
		$key = $_GET['key'];
		$data = $_SESSION['list'][$key];
		$_SESSION['k'] = $key;
	}
 ?>
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
		<h1 style="text-align: center;">Thực hành về Session</h1>
		<?php 
			if (isset($_GET['key'])) {
		?>
		<form action="add_process.php" method="POST" role="form">
			<div class="form-group">
				<label for="">Mã sinh viên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="mssv" required="" value="<?php echo $data['mssv'] ?>">
			</div>

			<div class="form-group">
				<label for="">Họ và tên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập tên" name="name" required="" value="<?php echo $data['name'] ?>">
			</div>
	
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone" required="" value="<?php echo $data['phone'] ?>">
			</div>  

			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="Nhập email" name="email" required="" value="<?php echo $data['email'] ?>">
			</div>

			<div class="form-group">
				<label for="">Giới tính</label><br>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" checked value="Nam">Male</label>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" value="Nữ">Female</label>
				<label class="radio-inline"><input class="radio-inline" type="radio" name="optradio" value="LGBT">Other</label>
			</div>

			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="addr" required="" value="<?php echo $data['addr'] ?>">
			</div>

			<button type="submit" class="btn btn-primary" name="edit">Lưu thông tin</button>
		</form>
		<?php
			} else{
		?>

		<form action="add_process.php" method="POST" role="form">
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
			}
		 ?>
	</div>
</body>
</html>