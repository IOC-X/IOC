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
		public function loadOrders(){
			$st = $this->db->prepare("SELECT * FROM Orders");
			$st->execute();
			return $st->fetchAll();
		}
		public function insertPumpReadings($pumpNos){
			$len = sizeof($pumpNos);
			for($b=1;$b<=$len;$b++){
				if(!empty($pumpNos[$b])){
					$st = $this->db->prepare("INSERT INTO pumpreadings (Date,Reading,PumpNo) VALUES (:date,:reading,:pumpno)");
					$st->execute(array(
						':date' => Date('y-m-d'),
						':reading' => $pumpNos[$b],
						':pumpno' => $b
					));	
				}			
			}
			return true;
		}
		public function loadPumpReadings($id){
			$st = $this->db->prepare("SELECT * FROM pumpreadings WHERE PumpNo=:pumpno ORDER BY Date desc LIMIT 7");
			$st->execute(array(
				':pumpno' => $id
			));
			return $st->fetchAll();
		}
		public function removePumpReading($id){
			$st = $this->db->prepare("DELETE FROM pumpreadings where Id=:id");
			if($st->execute(array(
				':id' => $id
			))){
				return true;	
			}
			else{
				return false;
			}
		}
		public function editPumpReading($id,$reading,$date){
			$st = $this->db->prepare("UPDATE pumpreadings SET Reading=:reading,Date=:date WHERE Id=:id");
			$st->execute(array(
				':id' => $id,
				':reading' => $reading,
				':date' => $date
			));
			return true;
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