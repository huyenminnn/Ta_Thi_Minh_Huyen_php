<?php 
	class Category{
		function All(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "quan_li_ban_hang";

			// Create connection
			$connn = new mysqli($servername, $username, $password, $dbname);
			$connn->set_charset("utf8");
			// Check connection
			if ($connn->connect_error) {
			    die("Connection failed: " . $connn->connect_error);
			} 
			$data = array();
			$sql = "SELECT * FROM categories";
			$result = $connn->query($sql);
			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			
			return $data;
		}

		// function find($code){
		// 	require_once('db_connect.php');
		// 	$sql = "SELECT * FROM categories WHERE code='".$code."'";
		// 	$data = $conn->query($sql)->fetch_assoc();
		// 	return $data;
		// }

		// function insert($data){
		// 	require_once('db_connect.php');
		// 	$sql = "INSERT INTO categories (code,name,slug,image) VALUES ('".$data['code']."','".$data['name']."',".$data['slug'].",".$data['image'].")";
		// 	$result = $conn->query($sql);
		// 	return $result;
		// }

		// function update($data){
		// 	require_once('db_connect.php');

		// 	$sql = "UPDATE categories SET name='".$data['name']."',slug=".$data['slug'].",image=".$data['image']." WHERE code='".$data['code']."'";

		// 	$result = $conn->query($sql);
		// 	return $result;
		// }

		// function delete($code){
		// 	require_once('db_connect.php');

		// 	$sql = "DELETE FROM categories WHERE code='".$code."'";

		// 	$result = $conn->query($sql);
		// 	return $result;
		// }
	}
 ?>