<?php 
	session_start();
	$_SESSION['username'] = "Zent";
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
 ?>