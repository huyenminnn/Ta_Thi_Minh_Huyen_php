<?php
	if (isset($_SESSION['cart'])) {
		$data = $_SESSION['cart'];
	}
?>
<html>
<head>
	
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Cảm ơn <font color="red"><?php echo $_SESSION['user']['name'] ?></font> đã tin tưởng sản phẩm của chúng tôi!</h2>
		<h4>Thông tin thanh toán</h4>
		<table class="table" border="1px" cellspacing="1"  style="font-size: 20px;">
			<thead>
				<tr>
					<th>#</th>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				$tong = 0;
				foreach ($data as $key => $product) {
					$i++;
					$tong+=$product['DonGia']*$product['SoLuong'];
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $product['MaSP']; ?></td>
						<td><?php echo $product['TenSP']; ?></td>
						<td>
							<?php 
							echo $product['SoLuong']; 
							?>
						</td>
						<td><?php echo number_format($product['DonGia']); ?></td>
						<td align="right"><?php echo number_format($product['DonGia']*$product['SoLuong']); ?></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan="4"></td>
					<td align="right"><b>Tổng</b></td>
					<td align="right"><b><?php echo number_format($tong); ?></b></td>
				</tr>

			</tbody>
		</table>

	</div>
</body>
</html>