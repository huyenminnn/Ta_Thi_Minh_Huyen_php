<?php 
	session_start();
	if (isset($_POST['sm'])) {
		$data = array(
			'mssv'=>$_POST['mssv'],
			'name'=>$_POST['name'],
			'phone'=>$_POST['phone'],
			'email'=>$_POST['email'],
			'gt'=>$_POST['optradio'],
			'addr'=>$_POST['addr']
		);
		$_SESSION['list'][] = $data;
		setcookie('msg','Thêm mới thành công!',time()+10);

		header('location: list.php');
	} elseif (isset($_POST['edit'])) {
		$data = array(
			'mssv'=>$_POST['mssv'],
			'name'=>$_POST['name'],
			'phone'=>$_POST['phone'],
			'email'=>$_POST['email'],
			'gt'=>$_POST['optradio'],
			'addr'=>$_POST['addr']
		);
		$_SESSION['list'][$_SESSION['k']] = $data;
		setcookie('msg','Chỉnh sửa thành công!',time()+10);
		header('location: list.php');
	} 
	else{
		header('location: add.php');
	}
?>