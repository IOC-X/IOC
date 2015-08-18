<?php
    /*
    *   Transport module model 
    */
    class Transport_model extends Model{
        function _construct(){
            parent::_construct();
        }
        public function addEmgTransport($fullname,$nic,$vehicleno,$contact,$description,$email){
            $st = $this->db->prepare("INSERT INTO emergencytransport (fullname,nic,vehicleno,contact,description,email,date) VALUES (:fullname,:nic,:vehicleno,:contact,:description,:email,:date)");
            $st->execute(array(
                ':fullname' => $fullname,
                ':nic' => $nic,
                ':vehicleno' => $vehicleno,
                ':contact' => $contact,
                ':description' => $description,
                ':email' => $email,
                ':date' => Date('y-m-d')
            ));
            return true;
        }
        public function loadEmgTransport(){
            $st = $this->db->prepare("SELECT * FROM emergencytransport LIMIT 10 ");
            $st->execute();
            return $st->fetchAll();
        }
        public function removeEmgTransport($id){
            $st = $this->db->prepare("DELETE FROM emergencytransport where Id=:id");
            if($st->execute(array(
                ':id' => $id
            ))){
                return true;    
            }
            else{
                return false;
            }
        }
    }