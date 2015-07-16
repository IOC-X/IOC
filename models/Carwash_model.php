<?php

include_once 'C:\wamp\www\IOC\libs\Database.php';

class Carwash_model extends Model {

    function __construct() {
        parent::__construct();
    }
//PACKAGE DATA RETREIVING STARTS HERE
    public function selectAllpackages() {
        
        $sql = $this->db->prepare("SELECT * FROM packages");
        $sql->execute();
        //$result = $sql->fetchAll(PDO::FETCH_ASSOC);
        //$contacts = array();
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

    public function editPackage($name, $description, $price,$time, $id) {
        //$pdo = Database::connect();
        $sql = $this->db->prepare("UPDATE packages SET name = ?, description = ?, price = ?, time = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($name, $description, $price,$time, $id));
    }

    public function deletePackage($id) {

        $sql = $this->db->prepare("DELETE FROM packages WHERE id=$id");
        $sql->execute();
    }

    public function createPackage($name, $description, $time, $price) {
        try {

            //$this->validateContactParams($name, $email, $mobile);
            $sql = $this->db->prepare("INSERT INTO packages(name, description, time, price) VALUES(?, ?, ?, ?)");
            $result = $sql->execute(array($name, $description, $time, $price));

            //return $result;
        } catch (Exception $e) {
            
        }
    }
    //PACKAGE DATA RETREIVING ENDS HERE
    
    //CUSTOMER DATA RETREIVING STARTS HERE
    public function selectAllcustomers() {
       
        $sql = $this->db->prepare("SELECT * FROM regular_customers");
        $sql->execute();
        //$result = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    public function addCustomer($cust_id, $name, $nic, $address,$contact) {
        try {

            //$this->validateContactParams($name, $email, $mobile);
            $sql = $this->db->prepare("INSERT INTO regular_customers(cust_id, name, nic, address, contact) VALUES(?, ?, ?, ?, ?)");
            $result = $sql->execute(array($cust_id, $name, $nic, $address,$contact));

            //return $result;
        } catch (Exception $e) {
            
        }
    }
     public function editCustomer($name, $nic, $address,$contact,$cust_id) {
        //$pdo = Database::connect();
        $sql = $this->db->prepare("UPDATE regular_customers SET name = ?, nic = ?, address = ?, contact = ? WHERE cust_id = ? LIMIT 1");
        $result = $sql->execute(array($name, $nic, $address,$contact,$cust_id));
    }
    public function deleteCustomer($cust_id) {

        $sql = $this->db->prepare("DELETE FROM regular_customers WHERE cust_id=$cust_id");
        $sql->execute();
    }
//CUSTOMER DATA RETREIVING ENDS HERE
    
//REGULAR TRANSACTIONS DATA RETREIVING STARTS HERE    
    
    
}

?>