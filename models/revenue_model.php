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
    

    
}

?>