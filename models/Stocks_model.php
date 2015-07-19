<?php
	class Stocks_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function insertMrngOrder($readingPetrol,$qntyPetrol,$orderpetrol,$readingSPetrol,$qntySPetrol,$orderspetrol,$readingDiesel,$qntyDiesel,$orderdiesel,$readingSDiesel,$qntySDiesel,$ordersdiesel){
			$st = $this->db->prepare("INSERT INTO Orders (FuelType,Reading,Quantity,Orderamnt,Date) VALUES (:type,:reading,:qnty,:amnt,:date)");
			$st->execute(array(
				':type' => 'Petrol',
				':reading' => $readingPetrol,
				':qnty' => $qntyPetrol,
				':amnt' => $orderpetrol,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO Orders (FuelType,Reading,Quantity,Orderamnt,Date) VALUES (:type,:reading,:qnty,:amnt,:date)");
			$st->execute(array(
				':type' => 'SPetrol',
				':reading' => $readingSPetrol,
				':qnty' => $qntySPetrol,
				':amnt' => $orderspetrol,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO Orders (FuelType,Reading,Quantity,Orderamnt,Date) VALUES (:type,:reading,:qnty,:amnt,:date)");
			$st->execute(array(
				':type' => 'Diesel',
				':reading' => $readingDiesel,
				':qnty' => $qntyDiesel,
				':amnt' => $orderdiesel,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO Orders (FuelType,Reading,Quantity,Orderamnt,Date) VALUES (:type,:reading,:qnty,:amnt,:date)");
			$st->execute(array(
				':type' => 'SDiesel',
				':reading' => $readingSDiesel,
				':qnty' => $qntySDiesel,
				':amnt' => $ordersdiesel,
				':date' => Date('y-m-d')
			));
		}
		public function addLubricant($prdName,$prdPrice,$prdQnty,$supplier){
			$st = $this->db->prepare("INSERT INTO Lubricants (Name,Price,Quantity,Supplier) VALUES (:name,:price,:qnty,:supplier)");
			$st->execute(array(
				':name' => $prdName,
				':price' => $prdPrice,
				':qnty' => $prdQnty,
				':supplier' => $supplier
			));
			return true;
		}
		public function loadLubricants(){
			$st = $this->db->prepare("SELECT * FROM Lubricants");
			$st->execute();
			return $st->fetchAll();
		}
		public function removeLubricant($id){
			$st = $this->db->prepare("DELETE FROM Lubricants where Id=:id");
			$st->execute(array(
				':id' => $id
			));
		}
		public function searchLube($name){
			$st = $this->db->prepare("SELECT * FROM Lubricants WHERE Name LIKE '{$name}%'");
			$st->execute();
			return $st->fetchAll();
		}
		public function addSupplier($name,$products,$contact){
			$st = $this->db->prepare("INSERT INTO Lubricant_suppliers (name,product,quantity) VALUES (:name,:product,:contact)");
			if($st->execute(array(
				':name' => $name,
				':product' => $products,
				':contact' => $contact
			))){
				return true;
			}

		}
		public function loadLubricantsSuppliers(){
			$st = $this->db->prepare("SELECT * FROM Lubricant_suppliers");
			$st->execute();
			return $st->fetchAll();
		}
		public function removeLubricantSupplier($id){
			$st = $this->db->prepare("DELETE FROM Lubricant_suppliers where Id=:id");
			$st->execute(array(
				':id' => $id
			));
		}
	}
?>