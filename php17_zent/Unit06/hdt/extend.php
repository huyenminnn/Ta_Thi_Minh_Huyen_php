<?php 
	/**
	 * 
	 */
	class Nguoi
	{
		var $ten;
		var $dia_chi;
		var $email;
		var $so_dt;

		function __construct(){
			echo "PT khoi tao!";
		}
		function nhapTT(){
			echo "Nhap thong tin";
		}

		function inTT(){
			echo "In thong tin";
		}
	}

	/**
	 * 
	 */
	class Nhanvien extends Nguoi
	{
		var $bang_cap;
	}

	/**
	 * 
	 */
	class KhachHang extends Nguoi
	{
		var $loai_KH;
	}

	$nv = new Nhanvien();
 ?>