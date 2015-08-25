<?php


class lubricant_model extends Model {

    function __construct() {
        parent::__construct();
    }
   
//PACKAGE DATA RETRIVING    
    public function selectAllpackages() {

        $sql = $this->db->prepare("SELECT * FROM lu_packages");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $lu_packages[] = $obj;
        }
        return $lu_packages;
    }
   

    public function editPackage($name, $description, $price, $time, $id) {
        $sql = $this->db->prepare("UPDATE lu_packages SET name = ?, description = ?, price = ?, duration = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($name, $description, $price, $time, $id));
    }

    public function deletePackage($id) {

        $sql = $this->db->prepare("DELETE FROM lu_packages WHERE id=$id");
        $sql->execute();
    }

    public function createPackage($name, $description, $time, $price) {
        try {
            $sql = $this->db->prepare("INSERT INTO lu_packages(name, description, duration, price) VALUES(?, ?, ?, ?)");
            $result = $sql->execute(array($name, $description, $time, $price));
        } catch (Exception $e) {
            
        }
    }
//CUSTOMER DATA RETREIVING STARTS HERE
    public function selectAllcustomers() {

        $sql = $this->db->prepare("SELECT * FROM lu_customers");
        $sql->execute();
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

    public function addCustomer($id, $name, $address, $contact,$email, $date) {
        try {
            $sql = $this->db->prepare("INSERT INTO lu_customers(id, name, address, contact ,email ,date) VALUES(?, ?, ?, ?, ?, ?)");
            $result = $sql->execute(array($id, $name, $address, $contact, $email, $date));
        } catch (Exception $e) {
            
        }
    }

    public function editCustomer($name, $address, $contact, $email, $date, $id) {
        $sql = $this->db->prepare("UPDATE lu_customers SET name = ?, address = ?, contact = ?, email = ?, date = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($name, $address, $contact, $email, $date, $id));
    }

    public function deleteCustomer($id) {

        $sql = $this->db->prepare("DELETE FROM lu_customers WHERE id=$id");
        $sql->execute();
    }
    
    //TRANSACTION DATA RETRIEVING
    public function addTransaction($cust_id, $package, $vehicleNo, $amount, $date) {

        $sql = $this->db->prepare("INSERT INTO regular_lutransactions(cust_id, package, vehicleNo, amount, date) VALUES(?, ?, ?, ?, ?)");
        $result = $sql->execute(array($cust_id, $package, $vehicleNo, $amount, $date));
    }
    public function deleteTransaction($id) {

        $sql = $this->db->prepare("DELETE FROM regular_lutransactions WHERE id=$id");
        $sql->execute();
    }
    public function editRegTransaction($cust_id, $package, $vehicleNo, $amount, $date, $id) {
        $sql = $this->db->prepare("UPDATE regular_lutransactions SET cust_id = ?, package = ?, vehicleNo = ?, amount = ?, date = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($cust_id, $package, $vehicleNo, $amount, $date, $id));
    }
    public function selectAllRegulartransactions() {
         
        $sql = $this->db->prepare("SELECT * FROM regular_lutransactions");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $regularTransactions[] = $obj;
        }
        return $regularTransactions;
    }
    
    //NON-REGULAR TRANSACTION DATA RETREIVING STARTS HERE
    public function addNonRegLuTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date) {

        $sql = $this->db->prepare("INSERT INTO NonRegLu_transactions(cname, contact, email, package, vehicleNo, amount, date) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $result = $sql->execute(array($cname, $contact, $email, $package, $vehicleNo, $amount, $date));
    }

     public function deleteNonRegLuTransaction($id) {

        $sql = $this->db->prepare("DELETE FROM NonRegLu_transactions WHERE id=$id");
        $sql->execute();
    }
    public function editNonRegLuTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id) {
        $sql = $this->db->prepare("UPDATE NonRegLu_transactions SET cname = ?, contact = ?,email = ?, package = ? , vehicleNo = ?, amount = ?, date = ? WHERE id = ? LIMIT 1");
        $result = $sql->execute(array($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id));
    }
    public function selectAllNonRegLuTransactions() {
        //$date = date("Y-m-d");  where date like'$date'
        $sql = $this->db->prepare("SELECT * FROM NonRegLu_transactions");
        $sql->execute();

        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

            $Transactions[] = $obj;
        }

        return $Transactions;
    }
    
}
