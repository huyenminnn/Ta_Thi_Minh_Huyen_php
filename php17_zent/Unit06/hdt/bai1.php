<?php 
	/**
	 * 
	 */
	class Oto
	{
		var $ten;
		var $hang_xe;
		var $mau;
		var $so_cho;

		function chay(){
			echo "Run nowwwww! ";
		}

		function print(){
			echo "<br> Thong tin:";
			echo "<br> Ten xe: ".$this->ten;
			echo "<br> Hang xe: ".$this->hang_xe;
			echo "<br> Mau xe: ".$this->mau;
			echo "<br> So cho: ".$this->so_cho;
		}
	}

	$audi = new Oto();
	$audi->ten = "Audi";
	$audi->hang_xe = "Audi";
	$audi->mau = "Trang";
	$audi->so_cho = "2";

	$audi->chay();

	$audi->print();
 ?>