<?php
	class Stocks_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function insertMrngOrder($readingPetrol,$qntyPetrol,$orderpetrol){
			$st = $this->db->prepare("INSERT INTO Orders (FuelType,Reading,Quantity,Orderamnt) VALUES (:type,:reading,:qnty,:amnt)");
			$st->execute(array(
				':type' => 'Petrol',
				':reading' => $readingPetrol,
				':qnty' => $qntyPetrol,
				':amnt' => $orderpetrol
			));
		}
		public function addLubricant($prdName,$prdPrice,$prdQnty){
			$st = $this->db->prepare("INSERT INTO Lubricants (Name,Price,Quantity) VALUES (:name,:price,:qnty)");
			$st->execute(array(
				':name' => $prdName,
				':price' => $prdPrice,
				':qnty' => $prdQnty
			));
			return true;
		}
	}
?>