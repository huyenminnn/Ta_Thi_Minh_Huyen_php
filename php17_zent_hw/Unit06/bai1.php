<?php 
	class SanPham{
		var $masp;
		var $tensp;
		var $soLuong;
		var $donGia;
		var $hangsx;

		function inTT(){
			echo "<td>".$this->masp."</td>";
			echo "<td>".$this->tensp."</td>";
			echo "<td>".$this->soLuong."</td>";
			echo "<td>".$this->donGia."</td>";
			echo "<td>".$this->hangsx."</td>";
		}
	}

	$sp1 = new SanPham();
	$sp2 = new SanPham();
	$sp3 = new SanPham();

	$sp1->masp = "SP01";
	$sp1->tensp = "Samsung S9";
	$sp1->soLuong = 50;
	$sp1->donGia = 20000000;
	$sp1->hangsx = "Samsung";

	$sp2->masp = "SP02";
	$sp2->tensp = "Samsung A7";
	$sp2->soLuong = 50;
	$sp2->donGia = 15000000;
	$sp2->hangsx = "Samsung";

	$sp3->masp = "SP03";
	$sp3->tensp = "Iphone X";
	$sp3->soLuong = 50;
	$sp3->donGia = 20000000;
	$sp3->hangsx = "Apple";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<table class="table">
 		<tr>
 			<th>Mã sản phẩm</th>
 			<th>Tên sản phẩm</th>
 			<th>Số lượng</th>
 			<th>Đơn giá</th>
 			<th>Hãng sản xuất</th>
 		</tr>
 		<tr><?php $sp1->inTT() ?></tr>
 		<tr><?php $sp2->inTT() ?></tr>
 		<tr><?php $sp3->inTT() ?></tr>
 	</table>
 </body>
 </html>