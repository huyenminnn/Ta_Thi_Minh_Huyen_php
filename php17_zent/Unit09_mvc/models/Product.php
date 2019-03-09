<?php 			
	
	include_once('Model.php');
	class Product extends Model{
		var $conn;
		var $table_name = 'products';
		var $primary_key = 'code';

		
	}
 ?>