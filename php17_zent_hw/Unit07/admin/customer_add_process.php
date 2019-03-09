<?php 
	include_once('../db_connect.php');
	//Lấy dữ liệu
	$data = $_POST;

	//thêm dữ liệu
	$sql = "INSERT INTO customers (code,name,mobile,email,address) VALUES ('".$data['code']."','".$data['name']."','".$data['mobile']."','".$data['email']."','".$data['address']."')";

	//thực hiện câu truy vấn
	$result = $conn->query($sql);
	
	if ($result==true) {
		setcookie('msg','Thêm mới thành công',time()+1);
		header('location: customer.php');
	} else {
		setcookie('msg','Thêm mới thất bại.',time()+1);
		header('location: customer_add.php');
	}