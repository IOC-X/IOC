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
		public function getLubricantSuppliers(){
			$st = $this->db->prepare("SELECT * FROM Suppliers where product='lubricant'");
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
		public function editLube($id,$name,$price,$qnty,$supplier){
			$st = $this->db->prepare("UPDATE Lubricants SET Name=:name,Price=:price,Quantity=:qnty,Supplier=:supplier WHERE Id=:id");
			$st->execute(array(
				':id' => $id,
				':name' => $name,
				':price' => $price,
				':qnty' => $qnty,
				':supplier' => $supplier
			));
			return true;
		}
		public function addSupplier($name,$product,$email,$contact){
			$st = $this->db->prepare("INSERT INTO Suppliers (name,product,contact,email) VALUES (:name,:product,:contact,:email)");
			if($st->execute(array(
				':name' => $name,
				':product' => $product,
				':contact' => $contact,
				':email' => $email
			))){
				return true;
			}

		}
		public function loadLubricantsSuppliers(){
			$st = $this->db->prepare("SELECT * FROM Suppliers");
			$st->execute();
			return $st->fetchAll();
		}
		public function removeLubricantSupplier($id){
			$st = $this->db->prepare("DELETE FROM Suppliers where Id=:id");
			$st->execute(array(
				':id' => $id
			));
		}
		public function pumpStatuses(){
			$st = $this->db->prepare("SELECT * FROM pumpstatus");
			$st->execute();
			return $st->fetchAll();
		}
		public function updatePumpStatus($id,$status){
			$st = $this->db->prepare("UPDATE pumpstatus SET Status=:status WHERE PumpNo=:id");
			$st->execute(array(
				':status' => $status,
				':id' => $id
			));
		}
	}
?>