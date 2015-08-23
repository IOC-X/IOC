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
        
        public function client_transactions(){
            
            alert("transaction");
            
        }

                public function addclient($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount) {
            
            $add_clients=  $this->db->prepare("Insert into clients (client_code,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount) VALUES(?, ?, ?, ?, ?,)"); 
            $add_clients->execute(array($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount));
            }
        
     
            
        public function searchClients($id){
                $val=(string)$id;
                
                $c1=  $this->db->prepare("Select * from clients WHERE client_id=:ID");
                $c1->execute(array (':ID'=>$val));
                print_r($c1->fetchAll());
            
            
        }   
        
        
         public function deleteClients($id) {
            $sql = $this->db->prepare("DELETE FROM clients WHERE id=$id");
            $sql->execute();
    }
        
    }