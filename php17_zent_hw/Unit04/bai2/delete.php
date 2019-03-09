<?php 
	session_start();
	$i =  $_GET['key'];
	unset($_SESSION['list'][$i]);
	setcookie('msg','Xoá thành công!',time()+5);
	header('location: list.php');
 ?>