<?php
	include_once('data.php');
	$data = $products;
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
		
		<h1 style="text-align: center;">Danh sách sản phẩm</h1>
		<a href="cart.php" class="btn btn-success">Giỏ hàng</a>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>

				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				foreach ($data as $key => $product) {
					$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $product['MaSP']; ?></td>
						<td><?php echo $product['TenSP']; ?></td>
						<td><?php echo $product['SoLuong']; ?></td>
						<td><?php echo number_format($product['DonGia']); ?></td>
						<td><a href="addToCart.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-warning">Thêm vào giỏ hàng</a></td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>