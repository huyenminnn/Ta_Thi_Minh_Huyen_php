<?php 
	include_once('../db_connect.php');
	if (isset($_GET['code'])) {
		$sql="SELECT * FROM customers WHERE code='".$_GET['code']."'";
		$result = $conn->query($sql);
		while ($data = $result->fetch_assoc()) {
			$response = "<li> Mã khách hàng: ".$data['code']."</li>
			                      <li>Tên khách hàng: ".$data['name']."</li>
			                      <li>Số điện thoại: ".$data['mobile']."</li>
			                      <li>Email: ".$data['email']."</li>
			                      <li>Địa chỉ: ".$data['address']."</li>";
		}
	}
	echo $response;
 ?>