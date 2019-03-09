<?php 
	include_once('../db_connect.php');
    $id = $_GET['code'];
	$sql = "DELETE FROM customers WHERE code='".$id."'";
	$result = $conn->query($sql);

	if ($result==true) {
		setcookie('msg','Xoá thành công',time()+1);
	} else {
		setcookie('msg','Xoá thất bại.',time()+1);
	}
	header('location: customer.php');
 ?>