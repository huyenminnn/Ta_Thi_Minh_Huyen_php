<?php 
	include_once('db_connect.php');
    $id = $_GET['code'];
	$sql = "DELETE FROM products WHERE code='".$id."'";
	$result = $conn->query($sql);

	if ($result==true) {
		setcookie('msg','Xoá thành công',time()+5);
		header('location: product.php');
	} else {
		setcookie('msg','Xoá thất bại.',time()+5);
		header('location: product.php');
	}
 ?>