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

        public function addclient($autocode, $fname, $lname, $address, $nic, $phone, $purchasedate, $amount) {
        echo $autocode;
        echo $fname;
        echo $lname;
        echo $address;
        echo $nic;
        echo $phone;
        echo $purchasedate;
        echo $amount;

        $adder = $this->db->prepare("INSERT INTO clients (client_id,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount)
                                    VALUES(:autocode,:fname,:lname,:address,:nic,:phone,:purchasedate,:amount)");

        $adder->execute(array(':autocode' => $autocode, ':fname' => $fname, ':lname' => $lname, ':address' => $address, ':nic' => $nic, ':phone' => $phone, ':purchasedate' => $purchasedate, ':amount' => $amount));


        // $add_clients=  $this->db->prepare("Insert into clients (client_id,client_fname,client_lname,client_address,client_nic,client_phone,client_purchase_date,client_purchase_amount) VALUES(?, ?, ?, ?, ?,?,?,?)"); 
        // $add_clients->execute(array($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount));
    }

    public function searchClients($id){
                $val=(string)$id;
                
                $c1=  $this->db->prepare("Select * from clients WHERE client_id=:ID");
                $c1->execute(array (':ID'=>$val));
                print_r($c1->fetchAll());
            
            
        }   
        
        public function deleteClient($id) {

        $sql = $this->db->prepare("DELETE FROM clients WHERE client_id=?");
        $sql->bindValue(1, $id);
        $sql->execute();
    }
        
    }