<?php 
	include_once('data.php');
	session_start();

	$masp = $_GET['MaSP'];

	if (isset($_SESSION['cart'][$masp])) {
		$_SESSION['cart'][$masp]['SoLuong'] ++;
	} else{
	$product = $products[$masp];

	$product['SoLuong'] = 1;

	$_SESSION['cart'][$masp] = $product;
}
	header('location: cart.php');
 ?>