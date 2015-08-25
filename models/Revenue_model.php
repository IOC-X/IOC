<?php

class Revenue_model extends Model {

    //private $value;


    function __construct() {
        parent::__construct();
    }
    public function loadLubricantProducts(){
        $st = $this->db->prepare("SELECT * from Lubricants");
        $st->execute();
        return $st->fetchAll();
    }
    public function loadLubricantDataSpec($id){
        $st = $this->db->prepare("SELECT * FROM Lubricants where Id=:id");
        $st->execute(array(
            ':id' => $id
        ));
        return $st->fetchAll();
    }
    public function insertlubricantinc($name,$price,$qnty,$supplier,$sqty,$total){
        $st = $this->db->prepare("INSERT INTO lubricant_income (prdType,quantity,supplier,sellingqty,price,date1,lubricantincome) VALUES (:prdType,:quantity,:supplier,:sellingqty,:price,:date,:lubricantincome)");
        $st->execute(array(
            ':prdType' => $name,
            ':quantity' => $qnty,
            ':sellingqty' => $sqty,
            ':price' => $price,
            ':date' => Date('y-m-d'),
            ':lubricantincome' => $total
        ));
    }
    public function loadActivePumpers(){
        $date = Date('y-m-d');
        $month = substr($date, 5,-3);
        $day = substr($date, 8,8);
        $st = $this->db->prepare("SELECT * FROM attendance where atmonth=:atmonth AND atdate=:atdate");
        $st->execute(array(
            ':atmonth' => $month,
            ':atdate' => $day
        ));
        return $st->fetchAll();
    }
    public function loadFuelExpData($type){
        $st = $this->db->prepare("SELECT * FROM Orders where Date=:date AND FuelType=:fueltype");
        $st->execute(array(
            ':date' => Date('y-m-d'),
            ':fueltype' => $type
        ));
        return $st->fetchAll();
    }
    public function addfuelexpDetails($type,$capacity,$payment){
        $st = $this->db->prepare("INSERT INTO fuel_expense (expfueltype,capacity,date,fuelpayment) VALUES (:type,:capacity,:date,:payment)");
        $st->execute(array(
            ':date' => Date('y-m-d'),
            ':type' => $type,
            ':capacity' => $capacity,
            ':payment' => $payment
        ));
        return true;
    }
    public function insertlubricantExp($prd,$price,$qty,$supplier,$bqnty,$total){
        $st = $this->db->prepare("INSERT INTO lubricant_expense (product,price,supplier,quantity,bquantity,total,date) VALUES (:product,:price,:supplier,:quantity,:bquantity,:total,:date)");
        $st->execute(array(
            ':product' => $prd,
            ':price' => $price,
            ':quantity' => $qty,
            ':supplier' => $supplier,
            ':bquantity' => $bqnty,
            ':total' => $total,
            ':date' => Date('y-m-d')
        ));
        return true;    
    }
    public function insertOtherExpenses($description,$expense){
        $st = $this->db->prepare("INSERT INTO other_expenses (description,expense,date) VALUES (:description,:expense,:date)");
        $st->execute(array(
            ':date' => Date('y-m-d'),
            ':expense' => $expense,
            ':description' => $description
        ));
        return true;
    }
    public function loadEmpData(){
        $st = $this->db->prepare("SELECT * from employee_list");
        $st->execute();
        return $st->fetchAll();
    }
    public function loadEmpDataSpec($empCode){
        $st = $this->db->prepare("SELECT * from employee_list WHERE employeeCode=:empCode");
        $st->execute(array(
            ':empCode' => $empCode
        ));
        return $st->fetchAll();    
    }
    public function getShiftDetails($empcode,$year,$month,$date){
        $st = $this->db->prepare("SELECT * from attendance WHERE empCode=:empCode AND atyear=:atyear AND atmonth=:atmonth AND atdate=:atdate");
        $st->execute(array(
            ':empCode' => $empcode,
            ':atyear' => $year,
            ':atmonth' => $month,
            ':atdate' => $date
        ));
        return $st->fetchAll();    
    }
    // public function addlubinc($name, $qty, $supplier, $price, $sqty, $inc, $date) {

    //     // echo "Name". $name." ";
    //     // echo "PRice" . $price." ";
    //     // echo "Qty" . $qty." ";
    //     // echo "Supplier" . $supplier." ";
    //     // echo "Sellingqty" . $sqty." ";
    //     // echo "income" . $inc." ";
    //     // echo "Date" . $date." ";

    //     $adder = $this->db->prepare("INSERT INTO lubricant_income (prdType,quantity,supplier,sellingqty,price,date1,lubricantincome) "
    //             . "VALUES (:name,:qty,:supplier,:sqty,:price,:day,:lubricantinc)");

    //     $adder->execute(array(
    //         ':name' => $name,
    //         ':qty' => $qty,
    //         ':supplier' => $supplier,
    //         ':sqty' => $sqty,
    //         ':price' => $price,
    //         ':day' => $date,
    //         ':lubricantinc' => $inc
    //     ));
    // }

    // public function selectAllLubIncome() {
    //     //$date = date("Y-m-d");  where date like'$date' 
    //     $sql = $this->db->prepare("SELECT * FROM lubricant_income");
    //     $sql->execute();
    //     while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
    //         $lu_income[] = $obj;
    //     }
    //     return $lu_income;
    // }

    // public function deleteLubincome($id) {

    //     $sql = $this->db->prepare("DELETE FROM lubricant_income WHERE prdIncomeID=$id");
    //     $sql->execute();
    // }

    // public function editLubincome($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID) {
    //     $sql = $this->db->prepare("UPDATE lubricant_income SET prdType = ?, quantity = ?, supplier = ?, sellingqty = ?, price = ?, date1 = ?, lubricantincome = ?, WHERE prdIncomeID = ? LIMIT 1");
    //     $result = $sql->execute(array($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID));
    // }
    
    // public function select_lube() {
    //     $results = $this->db->prepare("SELECT * FROM lubricant_income");
    //     $results->execute();
    //     return $results->fetchAll();
    // }

    // public function add_payment($empid,$empname,$empnic,$empdate,$empshifttype,$empgrosssal,$empepf,$empnetsal,$paid)
    // {
    //     $shift = $this->db->prepare("INSERT INTO payment (empID,empName,NIC,date,shifttype,grosssal,epf,netsal,paid)
    //                         VALUES(:id,:name,:nic,:datee,:shtype,:gsal,:epf,:nsal,:paid)");

    //     $shift->execute(array(':id' => $empid, ':name' => $empname, ':nic' => $empnic, ':datee' => $empdate,':shtype'=>$empshifttype, ':gsal' => $empgrosssal, ':epf' => $empepf, ':nsal' => $empnetsal, ':paid' => $paid));
    
    //     echo "done";
    // }

    // //for deleting payment

    // public function deletepayment($id)
    // {
    //     $sql=$this->db->prepare("DELETE FROM payment WHERE payID=$id");
    //     $sql->execute();
    // }

    // //to fetch data from db to table grid

    // public function selectallpayment()
    // {
    //      $sql = $this->db->prepare("SELECT * FROM payment");
    //     $sql->execute();
    //     while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
    //         $payment_ls[] = $obj;
    //     }
    //     return $payment_ls;
    // }

    // public function select_pay() {
    //     $results = $this->db->prepare("SELECT * FROM payment");
    //     $results->execute();
    //     return $results->fetchAll();
    // }

    // public function editpay($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$id)
    // {
    //     $p=$this->db->prepare("UPDATE payment SET empID=:p1, empName=:p2, NIC=:p3, date=:p4, shifttype=:p5, grosssal=:p6, epf=:p7, netsal=:p8, paid=:p9 WHERE payID=:id");
    //     $p->execute(array('empID' => $p1 , 'empName' => $p2 , 'NIC' => $p3 ,'date' => $p4, 'shifttype' => $p5, 'grosssal' => $p6, 'epf' => $p7, 'netsal' => $p8, 'paid' => $p9 , 'payID' => $id ));

    //     return true;
    // }



    // public function editLube($id,$name,$price,$qnty,$supplier){
    //         $st = $this->db->prepare("UPDATE Lubricants SET Name=:name,Price=:price,Quantity=:qnty,Supplier=:supplier WHERE Id=:id");
    //         $st->execute(array(
    //             ':id' => $id,
    //             ':name' => $name,
    //             ':price' => $price,
    //             ':qnty' => $qnty,
    //             ':supplier' => $supplier
    //         ));
    //         return true;
    //     }

}
?>