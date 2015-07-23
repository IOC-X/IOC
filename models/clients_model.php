<?php
    
    class clients_model extends Model{
        function _construct(){
                parent::_construct();       
            
        }
        
        public function list_clients() {
        $results = $this->db->query('Select * from clients');
        $results->execute();
        return $results->fetchAll();
        
     
        }
        
        public function add_clients($code,$fname,$lname,$address,$nic,$phone,$purchase_date,$amount) {
            
            $add_clients=  $this->db->prepare("Insert into clients (client_code,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount)"
                        . "Values(:code,:fname,:lname,:address,:nic,:phone,:purchase_date,:amount)"); 
            
            
            $add_clients->execute(array(':client_code'=>$code,':client_fname'=>$fname,':client_lname'=>$lname,':client_address'=>$address,':client_nic'=>$nic,':client_phone'=>$phone,
                                        ':client_purchase_date'=>$purchase_date,':client_purchase_amount'=>$amount));
            
        }
            
        public function searchClients($id){
                $val=(string)$id;
                $c1=  $this->db->prepare("Select * from clients WHERE client_id=:ID");
                $c1->execute(array (':ID'=>$val));
                print_r($c1->fetchAll());
            
            
        }   
    }