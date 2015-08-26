<?php 

class Assets_model extends Model{
    
    function __construct(){
        
        parent:: __construct();
        
    }
    public function insert_equipments($produce_code,$motor_make,$type,$manufactor_date,$name)
    {
    
 $assets = $this->db->prepare("insert into equipments(procode,momake,category,mdate,name) values(:produce_code,:motor_make,:type,:manufactor_date,:name) ");
       
        $assets->execute(array(
            
            ':produce_code' => $produce_code,
            ':motor_make'=> $motor_make,
            ':type'=> $type,
            ':manufactor_date' => $manufactor_date,
            ':name' => $name
            ));
        
         }
         

         public function add_assets_supplier1($fname,$lname,$company,$address,$email,$pnumber,$nic,$type)
                {
            
             $st= $this->db->prepare("insert into asupplier (Fname,Lname,Company,Address,Email,PNumber,NIC,Type) values(:fname,:lname,:company,:address,:email,:pnumber,:nic,:type)");
             $st->execute(array(
                 ':fname' => $fname,
                 ':lname' => $lname,
                 ':company' => $company,
                 ':address'=> $address,
                 ':email' => $email,
                 ':pnumber'=> $pnumber,
                 ':nic' => $nic,
                 ':type' => $type
                 
                 
                 
                 
             ));       
            
            
            
                }

         public function loadEquipments(){
			$st = $this->db->prepare("SELECT * FROM equipments");
			$st->execute();
			return $st->fetchAll();
		}
                public function removeEquipments($id){
			$st = $this->db->prepare("DELETE FROM equipments where id=:id");
			$st->execute(array(
				':id' => $id
			));
		}
              
                

                public function  load_Supplier(){
     
     		$st = $this->db->prepare("SELECT * FROM asupplier");
                $st->execute();
	        return $st->fetchAll();
	  }
          public function  remove_supplier($id){
              
              	$st = $this->db->prepare("DELETE FROM asupplier WHERE id = :id");
               $st->execute(array(
				':id' => $id
			));

              
              
              
          }
          public function  database_validate()
          {
            $st = $this->db->prepare("SELECT password FROM users");
			$st->execute();
			return $st->fetchAll();  
              
              
          }
       

          public function  sendemail($email,$user,$subject,$body)
        {
              
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
       $mail->addAddress($email, $user);   // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('ioc.negambo@gmail.com', 'IOC');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
                  
        }
        
        
        

          public function data_backup( $confirm )
        {
              
             if($confirm == "yes")
             {
                  // db config
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ioc";
    // db connect
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // file header stuff
    $output = "-- PHP MySQL Dump\n--\n";
    $output .= "-- Host: $dbhost\n";
    $output .= "-- Generated: " . date("r", time()) . "\n";
    $output .= "-- PHP Version: " . phpversion() . "\n\n";
    $output .= "SET SQL_MODE=\"NO_AUTO_VALUE_ON_ZERO\";\n\n";
    $output .= "--\n-- Database: `$dbname`\n--\n";
    // get all table names in db and stuff them into an array
    $tables = array();
    $stmt = $pdo->query("SHOW TABLES");
    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        $output .= "\n-- " . str_repeat("-", 60) . "\n\n";
        $output .= "--\n-- Table structure for table `$table`\n--\n\n";
        // get table create info
        $stmt = $pdo->query("SHOW CREATE TABLE $table");
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $output.= $row[1].";\n\n";
        // get table data
        $output .= "--\n-- Dumping data for table `$table`\n--\n\n";
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    }   
    // output file to browser
    header('Content-Description: File Transfer');
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $dbname . '.sql');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . strlen($output));
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    header('Pragma: public');
    echo $output;
             }
              
          }
    public function update_equipment($aname,$acode,$atype,$amakedate,$aid) {

        $sql = $this->db->prepare("UPDATE equipments SET procode=?,category=?,mdate=?,name=? WHERE id=? LIMIT 1");
        $sql->bindValue(1, $acode);
        $sql->bindValue(2, $atype);
        $sql->bindValue(3, $amakedate);
        $sql->bindValue(4, $aname);
        $sql->bindValue(5, $aid);
        $sql->execute();
    }
    public function update_supplier1($fname,$lname,$company,$address,$email,$pnumber,$nic,$type,$id) {

        
         //(Fname,Lname,Company,Address,Email,PNumber,NIC,Type) 
        
        $sql = $this->db->prepare("UPDATE asupplier SET Fname=?,Lname=?,Company=?,Address=?,Email=?,PNumber=?,NIC=?,Type=? WHERE id=? LIMIT 1");
        $sql->bindValue(1, $fname);
        $sql->bindValue(2, $lname);
        $sql->bindValue(3, $company);
        $sql->bindValue(4, $address);
        $sql->bindValue(5, $email);
        $sql->bindValue(6, $pnumber);
        $sql->bindValue(7, $nic);
        $sql->bindValue(8, $type);
        $sql->bindValue(9, $id);
        $sql->execute();
    }
          
        }
      
?>