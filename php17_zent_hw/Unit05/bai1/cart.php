<?php
session_start();
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
		<h1 style="text-align: center; margin-bottom: 70px;">Danh sách sản phẩm</h1>
		<a href="index.php" class="btn btn-success">Quay lại danh sách sản phẩm</a>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thanh toán</button>
		<table class="table">
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
							<a href="addToCart.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-success">+</a>
							<?php 
							echo $product['SoLuong']; 
							?>
							<a href="delete.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-danger">-</a>
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
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Thông tin khách hàng</h2>
				</div>
				<div class="modal-body">
					<form action="payment.php" method="POST">
						<div class="form-group">
							<label>Họ và tên:</label>
							<input type="text" class="form-control" name="name" required="">
						</div>
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" name="email" required="">
						</div>
						<div class="form-group">
							<label>Địa chỉ:</label>
							<input type="text" class="form-control" name="addr" required="">
						</div>
						<div class="form-group">
							<label for="email">Số điện thoại:</label>
							<input type="text" class="form-control" name="phone" required="">
						</div>
						
				<div class="modal-footer">
					<button type="submit" class="btn btn-default" name="submit">Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</body>
</html>