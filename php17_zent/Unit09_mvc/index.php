<?php 
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'list';

	switch ($mod) {
		case 'product':
			// echo "Bạn đang chọn sản phẩm";
			require_once('controllers/ProductController.php');
			$product_controller = new ProductController();

			switch ($act) {
				case 'list':
					$product_controller->list();
					break;
				case 'add':
					$product_controller->add();
					break;
				case 'detail':
					$product_controller->detail();
					break;
				case 'store':
					$product_controller->store();
					break;
				case 'edit':
					$product_controller->edit();
					break;
				case 'update':
					$product_controller->update();
					break;
				case 'delete':
					$product_controller->delete();
					break;
				default:
					echo "<br>không có gì hết.";
					break;
			}
			break;

		case 'customer':
			echo "Bạn đang chọn khách hàng";
			break;

		case 'employee':
			echo "Bạn đang chọn nhân viên";
			break;

		default:
			echo "không có gì hết.";
			break;
	}
 ?>