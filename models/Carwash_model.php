<?php

//include_once '\libs\Database.php';

class Carwash_model extends Model {

    function __construct() {
        parent::__construct();
    }

//PACKAGE DATA RETREIVING STARTS HERE
    public function selectAllpackages() {
        $packages='';
        $sql = $this->db->prepare("SELECT * FROM packages");
        $sql->execute();
        
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $packages[] = $obj;
        }
        return $packages;
    }

    public function selectPackgeById($id) {

        $sql = $this->db->prepare("SELECT * FROM packages WHERE id = ?");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function editPackage($name, $description, $price, $time, $id) {
        $sql = $this->db->prepare("UPDATE packages SET name = ?, description = ?, price = ?, time = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($name, $description, $price, $time, $id));
    }

    public function deletePackage($id) {

        $sql = $this->db->prepare("DELETE FROM packages WHERE id=$id");
        $sql->execute();
    }

    public function createPackage($name, $description, $time, $price) {
        try {
            $sql = $this->db->prepare("INSERT INTO packages(name, description, time, price) VALUES(?, ?, ?, ?)");
            $result = $sql->execute(array($name, $description, $time, $price));
        } catch (Exception $e) {
            
        }
    }

    //PACKAGE DATA RETREIVING ENDS HERE
    //CUSTOMER DATA RETREIVING STARTS HERE
    public function selectAllcustomers() {
        $customers='';
        $sql = $this->db->prepare("SELECT * FROM regular_customers");
        $sql->execute();
        $customers = array();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $customers[] = $obj;
        }
        return $customers;
    }

    public function selectCustomerById($cust_id) {

        $sql = $this->db->prepare("SELECT * FROM regular_customers WHERE cust_id =$cust_id");
        $sql->bindValue(1, $cust_id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function addCustomer($cust_id, $name, $nic, $address, $contact,$email, $date) {
        try {
            $sql = $this->db->prepare("INSERT INTO regular_customers(cust_id, name, nic, address, contact ,email ,date) VALUES(?, ?, ?, ?, ?, ?, ?)");
            $result = $sql->execute(array($cust_id, $name, $nic, $address, $contact, $email, $date));
        } catch (Exception $e) {
            
        }
    }

    public function editCustomer($name, $nic, $address, $contact, $email, $date, $cust_id) {
        $sql = $this->db->prepare("UPDATE regular_customers SET name = ?, nic = ?, address = ?, contact = ?, email = ?, date = ? WHERE cust_id = ? LIMIT 1");
        $result = $sql->execute(array($name, $nic, $address, $contact, $email, $date, $cust_id));
    }

    public function deleteCustomer($cust_id) {

        $sql = $this->db->prepare("DELETE FROM regular_customers WHERE cust_id=$cust_id");
        $sql->execute();
    }

    public function searchCustomer() {
        $keyword = '%' . $_POST['keyword'] . '%';
        
        $sql = $this->db->prepare("SELECT * FROM regular_customers WHERE name LIKE '$keyword' ORDER BY cust_id ASC LIMIT 0, 10");
        $sql->execute();

       // $sql = "SELECT * FROM regular_customers WHERE name LIKE (:keyword) ORDER BY cust_id ASC LIMIT 0, 10";
       // $query = $pdo->prepare($sql);
       // $query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
       // $query->execute();
        //$list = $query->fetchAll();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $list[] = $obj;
        }
        return $list;
    }

//CUSTOMER DATA RETREIVING ENDS HERE
//REGULAR TRANSACTIONS DATA RETREIVING STARTS HERE    
    public function addTransaction($cust_id, $package, $vehicleNo, $amount, $date) {

        $sql = $this->db->prepare("INSERT INTO regular_transactions(cust_id, package, vehicleNo, amount, date) VALUES(?, ?, ?, ?, ?)");
        $result = $sql->execute(array($cust_id, $package, $vehicleNo, $amount, $date));
    }
    public function deleteTransaction($id) {

        $sql = $this->db->prepare("DELETE FROM regular_transactions WHERE id=$id");
        $sql->execute();
    }
    public function editRegTransaction($cust_id, $package, $vehicleNo, $amount, $date, $id) {
        $sql = $this->db->prepare("UPDATE regular_transactions SET cust_id = ?, package = ?, vehicleNo = ?, amount = ?, date = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($cust_id, $package, $vehicleNo, $amount, $date, $id));
    }
    public function selectAllRegulartransactions() {
        //$date = date("Y-m-d");  where date like'$date' 
        $sql = $this->db->prepare("SELECT * FROM regular_transactions");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $regularTransactions[] = $obj;
        }
        
        return $regularTransactions;
   
    }

    //NON-REGULAR TRANSACTION DATA RETREIVING STARTS HERE
    public function addCarTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date) {

        $sql = $this->db->prepare("INSERT INTO car_transactions(cname, contact, email, package, vehicleNo, amount, date) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $result = $sql->execute(array($cname, $contact, $email, $package, $vehicleNo, $amount, $date));
    }

     public function deleteCarTransaction($id) {

        $sql = $this->db->prepare("DELETE FROM car_transactions WHERE id=$id");
        $sql->execute();
    }
    public function editCarTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id) {
        $sql = $this->db->prepare("UPDATE car_transactions SET cname = ?, contact = ?,email = ?, package = ? , vehicleNo = ?, amount = ?, date = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id));
    }
    public function selectAlltransactions() {
        //$date = date("Y-m-d");  where date like'$date'
        $sql = $this->db->prepare("SELECT * FROM car_transactions");
        $sql->execute();

        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

            $Transactions[] = $obj;
        }

        return $Transactions;
    }
    
    //REPORT DATA RETRIEVING STARTS HERE
    public function CustomerStatistics() {
        $sql1 = $this->db->prepare("set @sum=0;");
        $sql1->execute();
        $sql2 = $this->db->prepare("select date,@sum := @sum + counts as sum from (select count(cust_id) as counts,date from regular_customers group by date) as regular_customers");
        $sql2->execute();

        while ($obj = $sql2->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }

    public function packageUsage() {

        $sql = $this->db->prepare("select count(id) as counts,package from regular_transactions group by package union select count(id) as counts,package from car_transactions group by package");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    //ALERTS
    //REGULAR TRANSACTIONS DATA RETRIEVING FOR ALERTS
    public function selectAllRegtransactions() {
        //$date = date("Y-m-d");  where date like'$date'
        $sql = $this->db->prepare("select t.id, r.name, t.package, t.vehicleNo ,t.date,t.status, r.email , r.contact from regular_customers r, regular_transactions t where r.cust_id=t.cust_id and t.status like 'Not Returned'");
        $sql->execute();
        $Transactions='';
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
             
           $Transactions[] = $obj;
        }
        return $Transactions;        
    }
    
    public function updateRegStatus($id){
        $sql = $this->db->prepare("UPDATE regular_transactions SET status = 'Returned' WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($id));
    }

 //MAIL SENDER
    public function SendMail($email,$user) {
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
        $mail->FromName = 'IOC Carwash';
        $mail->addAddress($email, $user);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('ioc.negambo@gmail.com', 'IOC');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'IOC Carwash';
        $mail->Body = 'Dear Customer your Carwash service is done. You can collect your vehicle at our service station. Thank You for using our service.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
    public function SendSms($contact){
        include ( "/libs/sms/src/NexmoMessage.php" );
	$newCon= substr($contact,1);

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('0fd288d7', '4ba994ca');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+94'.$newCon, 'IOC', 'Dear Customer your Carwash service is done. You can collect your vehicle at our service station. Thank You for using our service.' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!
    }

    public function selectAllCartransactions() {
        //$date = date("Y-m-d");  where date like'$date'
        $sql = $this->db->prepare("SELECT * FROM car_transactions where status like 'Not Returned'");
        $sql->execute();
        $Transactions='';
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

            $Transactions[] = $obj;
        }

        return $Transactions;
    }
    public function updateNonRegStatus($id){
        $sql = $this->db->prepare("UPDATE car_transactions SET status = 'Returned' WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($id));
    }
    

}

?>