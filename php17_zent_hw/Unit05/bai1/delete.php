<?php 
	include_once('data.php');
	session_start();

	$masp = $_GET['MaSP'];

	if ($_SESSION['cart'][$masp]['SoLuong']>1) {
		$_SESSION['cart'][$masp]['SoLuong'] --;
	} else{
	unset($_SESSION['cart'][$masp]);
}
	header('location: cart.php');
 ?>