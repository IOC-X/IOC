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
        public function editPumpReading($id,$fullname,$nic,$vehicleno,$contactno,$email,$description){
            $st = $this->db->prepare("UPDATE emergencytransport SET fullname=:fullname,nic=:nic,vehicleno=:vehicleno,contact=:contact,description=:description,email=:email WHERE Id=:id");
            $st->execute(array(
                ':id' => $id,
                ':fullname' => $fullname,
                ':nic' => $nic,
                ':vehicleno' => $vehicleno,
                ':contact' => $contactno,
                ':description' => $description,
                ':email' => $email
            ));
            return true;
        }
        public function loadLubricantTransport(){
            $st = $this->db->prepare("SELECT * FROM lubricanttransport LIMIT 10 ");
            $st->execute();
            return $st->fetchAll();
        }
        public function addLubricantTransport($driver,$branch,$vehicleno,$product){
            $st = $this->db->prepare("INSERT INTO lubricanttransport (Date,Driver,Branch,Product,Vehicleno) VALUES (:date,:driver,:branch,:product,:vehicleno)");
            $st->execute(array(
                ':date' => Date('y-m-d'),
                ':driver' => $driver,
                ':branch' => $branch,
                ':product' => $product,
                ':vehicleno' => $vehicleno
            ));
            return true;
        }
        public function removeLubricantTransport($id){
            $st = $this->db->prepare("DELETE FROM lubricanttransport where Id=:id");
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