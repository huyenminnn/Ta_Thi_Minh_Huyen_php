<?php
	session_start();
	$data = array();
	$data = $_SESSION['list'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Danh sách thành viên</h1>
		<a href="add.php" class="btn btn-warning">Add</a>
		<?php 
		if (isset($_COOKIE['msg'])){
		?>
			<div class="alert alert-success">
				<?php echo $_COOKIE['msg']; ?>
			</div>
		<?php
		}
		?>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Mã số sinh viên</th>
					<th>Họ tên</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['mssv']; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td>
							<a href="delete.php?key=<?php echo $key; ?>" class="btn btn-danger">Delete</a>
							<a href="detail.php?key=<?php echo $key; ?>" class="btn btn-success">Detail</a>
							<a href="add.php?key=<?php echo $key; ?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>