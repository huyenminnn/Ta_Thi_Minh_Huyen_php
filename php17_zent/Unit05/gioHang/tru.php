<?php 
	include_once('data.php');
	session_start();

	$masp = $_GET['MaSP'];

	if ($_SESSION['cart'][$masp]>0) {
		$_SESSION['cart'][$masp]['SoLuong'] --;
	} else{
		
	}
	header('location: cart.php');
 ?>