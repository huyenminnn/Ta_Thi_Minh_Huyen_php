<?php 
	include_once('../db_connect.php');
	//Lấy dữ liệu
	$data = $_POST;

	//thêm dữ liệu
	$sql = "UPDATE customers SET name='".$data['name']."',mobile='".$data['mobile']."',email='".$data['email']."',address='".$data['address']."' WHERE code='".$data['code']."'";

	//thực hiện câu truy vấn
	$result = $conn->query($sql);
	
	if ($result==true) {
		setcookie('msg','Cập nhật thành công',time()+1);
		header('location: customer.php');
	} else {
		setcookie('msg_fail','Cập nhật thất bại.',time()+1);
		header('location: customer.php');
	}