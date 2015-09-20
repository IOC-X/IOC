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
		public function updateTank($qntyPetrol,$qntySPetrol,$qntyDiesel,$qntySDiesel){
			$st = $this->db->prepare("UPDATE tanks SET Petrol=:petrol,SPetrol=:spetrol,Diesel=:diesel,SDiesel=:sdiesel WHERE Id=1");
			$st->execute(array(
				':petrol' => $qntyPetrol,
				':spetrol' => $qntySPetrol,
				':diesel' => $qntyDiesel,
				':sdiesel' => $qntySDiesel
			));
			return true;
		}
		public function insertEveningStock($readingPetrol,$qntyPetrol,$readingSPetrol,$qntySPetrol,$readingDiesel,$qntyDiesel,$readingSDiesel,$qntySDiesel){
			$st = $this->db->prepare("INSERT INTO eveningstocks (FuelType,Reading,Quantity,Date) VALUES (:type,:reading,:qnty,:date)");
			$st->execute(array(
				':type' => 'Petrol',
				':reading' => $readingPetrol,
				':qnty' => $qntyPetrol,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO eveningstocks (FuelType,Reading,Quantity,Date) VALUES (:type,:reading,:qnty,:date)");
			$st->execute(array(
				':type' => 'SPetrol',
				':reading' => $readingSPetrol,
				':qnty' => $qntySPetrol,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO eveningstocks (FuelType,Reading,Quantity,Date) VALUES (:type,:reading,:qnty,:date)");
			$st->execute(array(
				':type' => 'Diesel',
				':reading' => $readingDiesel,
				':qnty' => $qntyDiesel,
				':date' => Date('y-m-d')
			));
			$st = $this->db->prepare("INSERT INTO eveningstocks (FuelType,Reading,Quantity,Date) VALUES (:type,:reading,:qnty,:date)");
			$st->execute(array(
				':type' => 'SDiesel',
				':reading' => $readingSDiesel,
				':qnty' => $qntySDiesel,
				':date' => Date('y-m-d')
			));
			return true;
		}
		public function getTankStocks(){
			$st = $this->db->prepare("SELECT * FROM tanks");
			$st->execute();
			return $st->fetchAll();
		}
		public function loadOrders($type){
			$st = $this->db->prepare("SELECT * FROM Orders WHERE FuelType=:fueltype ORDER BY Id DESC");
			$st->execute(array(
				':fueltype' => $type
			));
			return $st->fetchAll();
		}
		public function removeOrder($id){
			$st = $this->db->prepare("DELETE FROM Orders where Id=:id");
			if($st->execute(array(
				':id' => $id
			))){
				return true;	
			}
			else{
				return false;
			}
		}
		public function editOrder($id,$reading,$qnty,$order){
			$st = $this->db->prepare("UPDATE Orders SET Reading=:reading,Quantity=:qnty,Orderamnt=:orderamnt WHERE Id=:id");
			$st->execute(array(
				':id' => $id,
				':reading' => $reading,
				':qnty' => $qnty,
				':orderamnt' => $order
			));
			return true;
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
		public function loadNoOfPumps(){
			$st = $this->db->prepare("SELECT COUNT(PumpNo) FROM pumpstatus");
			$st->execute();
			return $st->fetchAll();
		}
		public function addPump($no,$fuelType){
			$st = $this->db->prepare("INSERT INTO pumpstatus VALUES (:no,:status,:fuel)");
			$st->execute(array(
				':no' => $no,
				':status' => $status,
				':fuel' => $fuel
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
		public function checkSupplier($name){
			$st = $this->db->prepare("SELECT * FROM Suppliers WHERE name=:name");
			$st->execute(array(
				':name' => $name
			));
			return $st->fetchAll();	
		}
		public function checkLubricantProduct($name){
			$st = $this->db->prepare("SELECT * FROM Lubricants WHERE name=:name");
			$st->execute(array(
				':name' => $name
			));
			return $st->fetchAll();	
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
		public function editSupplier($id,$name,$email,$contact){
			$st = $this->db->prepare("UPDATE Suppliers SET name=:name,contact=:contact,email=:email WHERE Id=:id");
			$st->execute(array(
				':id' => $id,
				':name' => $name,
				':contact' => $contact,
				':email' => $email
			));
			return true;
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
        public function retrieveStockReport($kl){
        	$stocks = '';
        
            $sql = $this->db->prepare("SELECT FuelType,Reading,Quantity,Orderamnt,Date FROM Orders WHERE Date LIKE '" . $kl . "%'");
            $sql->execute();

            while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
                $stocks[] = $obj;
            }
            return $stocks;
        }

        public function SendMail($email, $message) {
        require_once '/libs/email/PHPMailer/PHPMailerAutoload.php';


        $mail = new PHPMailer;
//$mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ioc.negambo@gmail.com';                 // SMTP username
        $mail->Password = 'IocNegambo123';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = 'carwash@gmail.com';
        $mail->FromName = 'IOC';
        $mail->addAddress($email, $email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('ioc.negambo@gmail.com', 'IOC');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'IOC Maravila';
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

	}
?>