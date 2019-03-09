<?php 
	include_once('../db_connect.php');
	if (isset($_GET['code'])) {
		$sql="SELECT * FROM employees WHERE code='".$_GET['code']."'";
		$result = $conn->query($sql);
		while ($data = $result->fetch_assoc()) {
			$response = "<li> Mã nhân viên: ".$data['code']."</li>
			                      <li>Tên nhân viên: ".$data['name']."</li>
			                      <li>Số điện thoại: ".$data['mobile']."</li>
			                      <li>Email: ".$data['email']."</li>
			                      <li>Địa chỉ: ".$data['address']."</li>
			                      <li>Mật khẩu: ".$data['password']."</li>";
		}
	}
	echo $response;
 ?>