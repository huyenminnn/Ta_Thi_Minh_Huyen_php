<?php 
	include_once('db_connect.php');
	//Lấy dữ liệu
	$data = $_POST;

	//thêm dữ liệu
	$sql = "UPDATE products SET name='".$data['name']."',quantity=".$data['quantity'].",price=".$data['price']." WHERE code='".$data['code']."'";

	//thực hiện câu truy vấn
	$result = $conn->query($sql);
	
	if ($result==true) {
		setcookie('msg','Cập nhật thành công',time()+5);
		header('location: product.php');
	} else {
		setcookie('msg_fail','Cập nhật thất bại.',time()+5);
		header('location: product.php');
	}