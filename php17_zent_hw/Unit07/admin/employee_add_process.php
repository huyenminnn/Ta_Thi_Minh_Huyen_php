<?php 
	include_once('../db_connect.php');
	//Lấy dữ liệu
	$data = $_POST;

	//thêm dữ liệu
	$sql = "INSERT INTO employees (code,name,mobile,email,address,password) VALUES ('".$data['code']."','".$data['name']."','".$data['mobile']."','".$data['email']."','".$data['address']."','".$data['password']."')";

	//thực hiện câu truy vấn
	$result = $conn->query($sql);
	
	if ($result==true) {
		setcookie('msg','Thêm mới thành công',time()+1);
		header('location: employee.php');
	} else {
		setcookie('msg','Thêm mới thất bại.',time()+1);
		header('location: employee_add.php');
	}