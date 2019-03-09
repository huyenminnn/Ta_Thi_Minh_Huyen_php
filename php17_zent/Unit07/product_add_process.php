<?php 
	include_once('db_connect.php');
	//Lấy dữ liệu
	$data = $_POST;

	//thêm dữ liệu
	$sql = "INSERT INTO products (code,name,quantity,price) VALUES ('".$data['code']."','".$data['name']."',".$data['quantity'].",".$data['price'].")";

	//thực hiện câu truy vấn
	$result = $conn->query($sql);
	
	if ($result==true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('location: product.php');
	} else {
		setcookie('msg','Thêm mới thất bại.',time()+5);
		header('location: product_add.php');
	}