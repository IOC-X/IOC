<?php

class Revenue_model extends Model{

	//private $value;

	
    function __construct() {
        parent::__construct();
	}


	public function addlubinc($name, $qty, $supplier, $price, $sqty, $inc, $date) {
       
        // echo "Name". $name." ";
        // echo "PRice" . $price." ";
        // echo "Qty" . $qty." ";
        // echo "Supplier" . $supplier." ";
        
        // echo "Sellingqty" . $sqty." ";
        // echo "income" . $inc." ";
        // echo "Date" . $date." ";
        
        $adder = $this->db->prepare("INSERT INTO lubricant_income (prdType,quantity,supplier,sellingqty,price,date1,lubricantincome) "
                . "VALUES (:name,:qty,:supplier,:sqty,:price,:day,:lubricantinc)");

        $adder->execute(array(
        		':name' => $name,
        		':qty' => $qty,
        		':supplier' => $supplier,
        		':sqty' => $sqty,
        		':price' => $price,
        		':day' => $date,
        		':lubricantinc' => $inc
        ));
    }

    public function selectAllLubIncome() {
        //$date = date("Y-m-d");  where date like'$date' 
        $sql = $this->db->prepare("SELECT * FROM lubricant_income");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $lu_income[] = $obj;
        }
        return $lu_income;
    }
    
     public function deleteLubincome($id) {

        $sql = $this->db->prepare("DELETE FROM lubricant_income WHERE prdIncomeID=$id");
        $sql->execute();
    }
    public function editLubincome($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID) {
        $sql = $this->db->prepare("UPDATE lubricant_income SET prdType = ?, quantity = ?, supplier = ?, sellingqty = ?, price = ?, date1 = ?, lubricantincome = ?, WHERE prdIncomeID = ? LIMIT 1");
        $result = $sql->execute(array($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID));

    
}

?>