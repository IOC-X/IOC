<?php
    
    class clients_model extends Model{
        function _construct(){
                parent::_construct();       
            
        }
        
        public function list_clients() {
        $results = $this->db->query('SELECT * FROM clients');
        $results->execute();
        return $results->fetchAll();
        }
        
        public function client_management(){
            
        $results = $this->db->query('SELECT * FROM clients');
        $results->execute();
        return $results->fetchAll();
            
        }
        
             
        public function update_clients($autocode,$fname,$lname,$address,$phone) {
            
            $adder = $this->db->prepare("UPDATE clients SET client_fname=?,client_lname=?,client_address=?,client_phone=? WHERE client_id=? LIMIT 1");
            $adder->bindValue(1, $fname);
            $adder->bindValue(2, $lname);
            $adder->bindValue(3, $address);
            $adder->bindValue(4, $phone);
            $adder->bindValue(5, $autocode);
             $adder->execute();
            
            
        }
        
      
         
          public function addtransactions($client_no,$client_name,$client_vechicle,$client_pumper,$pump_date,$fuel_type,$pump_number,$pump_liters,$pump_value) {
                      
            $trans= $this->db->prepare("INSERT INTO client_transactions (trcusid,client_name,client_pump_vechicle,client_pumper,pump_date,client_pump_no,client_pump_liters,pump_value,trtype)"
                    . "VALUES(:client,:client_name, :client_vechicle, :client_pumper,:pump_date,:client_pump_no,:client_pump_liters,:client_pump_value,:ftype)");
               
            $trans->execute(array(
                ':client' => $client_no, 
                ':client_name' => $client_name, 
                ':client_vechicle' => $client_vechicle,
                ':client_pumper'=>$client_pumper,
                ':pump_date'=>$pump_date,
               
                ':client_pump_no'=>$pump_number,
                ':client_pump_liters'=>$pump_liters,
                ':client_pump_value'=>$pump_value,
                    ':ftype'=>$fuel_type
        ));
    }       

        public function addclient($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount,$profile) {
            
        $adder = $this->db->prepare("INSERT INTO clients (client_id,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount,profile)
                                    VALUES(:autocode,:fname,:lname,:address,:nic,:phone,:purchasedate,:amount,:profile)");

        $adder->execute(array(':autocode' => $autocode, ':fname' => $fname, ':lname' => $lname, ':address' => $address, ':nic' => $nic, ':phone' => $phone, ':purchasedate' => $purchasedate, ':amount' => $amount,':profile' => $profile));
            }
        
     
            
        public function searchClients($id){
                $val=(string)$id;
                
                $c1=  $this->db->prepare("Select * from clients WHERE client_id=:ID");
                $c1->execute(array (':ID'=>$val));
                print_r($c1->fetchAll());
            
            
        }   
        
        
         public function deleteClients($id) {
                    $sql = $this->db->prepare("DELETE FROM clients WHERE client_id=?");
                    $sql->bindValue(1, $id);
                    $sql->execute();
            
         }
         
         
         public function SendSms($contact) {
        include ( "/libs/sms/src/NexmoMessage.php" );
        $newCon = substr($contact, 1);

        // Step 1: Declare new NexmoMessage.
        $nexmo_sms = new NexmoMessage('5a27fc08', 'c64f2575');

        // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
        $info = $nexmo_sms->sendText('+94' . $newCon, 'IOC', 'Dear Customer your Carwash service is done. You can collect your vehicle at our service station. Thank You for using our service.');

        // Step 3: Display an overview of the message
        echo $nexmo_sms->displayOverview($info);

        // Done!
    }
    
    public function historypump(){
            
        $results = $this->db->query('SELECT * FROM client_transactions');
        $results->execute();
        return $results->fetchAll();
            
        }
        
        
    }