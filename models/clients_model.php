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
            
             $adder->execute();
            
            
        }
        
      
          public function client_transactions($client_id,$client_name,$client_vechicle,$client_pump_by,$pump_date,$fuel_type,$pump_number,$pump_liters,$pump_liters,$pump_value) {
                
            $trans=  $this->db->prepare("Insert into client_transactions (client_id,client_name,client_pump_vechicle,client_pump_by,	pump_date,fuel_type,client_pump_no,client_pump_liters,client_pump_value) Values"
                       . "(:client_id,:client_name,:client_vechicle,:client_pump_by,:pump_date,:fuel_type,:pump_number,:pump_liters,:pump_liters,:pump_value");
               
            $trans->execute(array(':client_id'=>$client_id, ':client_name'=>$client_name, ':client_vechicle'=>$client_vechicle,':client_pump_by'=>$client_pump_by,':pump_date'=>$pump_date,':fuel_type'=>$fuel_type,':client_pump_no'=>$pump_number,':client_pump_liters'=>$pump_liters,':client_pump_value'=>$pump_value));
            }
            
            

        public function addclient($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount) {
            
        $adder = $this->db->prepare("INSERT INTO clients (client_id,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount)
                                    VALUES(:autocode,:fname,:lname,:address,:nic,:phone,:purchasedate,:amount)");

        $adder->execute(array(':autocode' => $autocode, ':fname' => $fname, ':lname' => $lname, ':address' => $address, ':nic' => $nic, ':phone' => $phone, ':purchasedate' => $purchasedate, ':amount' => $amount));
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
        
    }