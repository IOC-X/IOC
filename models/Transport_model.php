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
        public function editLubricantTransport($id,$vehicleno,$driver,$branch,$product){
            $st = $this->db->prepare("UPDATE lubricanttransport SET vehicleno=:vehicleno,driver=:driver,branch=:branch,product=:product WHERE Id=:id");
            $st->execute(array(
                ':id' => $id,
                ':vehicleno' => $vehicleno,
                ':driver' => $driver,
                ':branch' => $branch,
                ':product' => $product
            ));
            return true;
        }
        public function loadBranchDetails(){
            $st = $this->db->prepare("SELECT * FROM branches");
            $st->execute();
            return $st->fetchAll();
        }
        public function addBranch($name,$description,$address){
            $st = $this->db->prepare("INSERT INTO branches (name,description,address) VALUES (:name,:description,:address)");
            $st->execute(array(
                ':name' => $name,
                ':description' => $description,
                ':address' => $address
            ));
            return true;
        }
        public function removeBranch($id){
            $st = $this->db->prepare("DELETE FROM branches where Id=:id");
            if($st->execute(array(
                ':id' => $id
            ))){
                return true;    
            }
            else{
                return false;
            }
        }
        public function getBranchSpec($id){
            $st = $this->db->prepare("SELECT * FROM branches WHERE Id=:id");
            $st->execute(array(
                ':id' => $id
            ));
            return $st->fetchAll();    
        }
        public function editBranch($id,$name,$description,$address){
            $st = $this->db->prepare("UPDATE branches SET Name=:name,description=:description,address=:address WHERE Id=:id");
            $st->execute(array(
                ':id' => $id,
                ':name' => $name,
                ':description' => $description,
                ':address' => $address
            ));
            return true;
        }
        public function retrieveEmgReport($kl){
            $stocks = '';
            $sql = $this->db->prepare("SELECT * FROM emergencytransport WHERE date LIKE :kl");
            $sql->execute(array(
                ':kl' => $kl
            ));

            while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
                $stocks[] = $obj;
            }
            return $stocks;
        }
        public function retrieveLubricantReport(){
            $stocks = '';
            $sql = $this->db->prepare("SELECT * FROM lubricanttransport");
            $sql->execute();

            while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
                $stocks[] = $obj;
            }
            return $stocks;
        }
    }