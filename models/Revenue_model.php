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
            ':supplier' => $supplier,
            ':date' => Date('y-m-d'),
            ':lubricantincome' => $total
        ));
        return true;
    }
    public function loadActivePumpers(){
        $date = Date('Y-m-d');
        $month = substr($date, 5,-3);
        //$matmonthonth = "09";
        //$month = (integer)$month;
        $day = substr($date, 8,8);
        //$day = "29";
        //$day = (integer)$day;
        $st = $this->db->prepare("SELECT * FROM attendance where atmonth=09 AND atdate=29");
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
    public function pay_details($empid,$empname,$nic,$salary){
        $st = $this->db->prepare("INSERT INTO payment (empID,empName,date,paid) VALUES (:empID,:empName,:date,:paid)");
        $st->execute(array(
            ':date' => Date('y-m-d'),
            ':empID' => $empid,
            ':empName' => $empname,
            ':paid' => $salary
        ));
        return true;
    }
    public function pay_list() {
        $results = $this->db->prepare("SELECT * FROM payment");
        $results->execute();
        return $results->fetchAll();
    }
    public function deletepayment($id){
        $sql=$this->db->prepare("DELETE FROM payment WHERE Id=$id");
        $sql->execute();
    }
    public function loadFuelExpenses(){
        $st = $this->db->prepare("SELECT * from fuel_expense");
        $st->execute();
        return $st->fetchAll();
    }
    public function removeFuelHis($id){
        $sql=$this->db->prepare("DELETE FROM fuel_expense WHERE Id=$id");
        $sql->execute();
    }
    public function editFuelHistory($id,$fuel,$capacity,$date,$payment){
        $st = $this->db->prepare("UPDATE fuel_expense SET expfueltype=:fuel,capacity=:capacity,date=:date,fuelpayment=:payment WHERE Id=:id");
        $st->execute(array(
            ':id' => $id,
            ':fuel' => $fuel,
            ':capacity' => $capacity,
            ':date' => $date,
            ':payment' => $payment
        ));
        return true;
    }
    public function loadLubricantExpenses(){
        $st = $this->db->prepare("SELECT * from lubricant_expense");
        $st->execute();
        return $st->fetchAll();
    }
    public function removeLubricantHis($id){
        $sql=$this->db->prepare("DELETE FROM lubricant_expense WHERE Id=$id");
        $sql->execute();
        return true;
    }
    public function editLubricantHistory($id,$product,$price,$date,$qty,$bqty,$total,$supplier){
        $st = $this->db->prepare("UPDATE lubricant_expense SET product=:product,price=:price,supplier=:supplier,quantity=:quantity,bquantity=:bquantity,total=:total,date=:date WHERE Id=:id");
        $st->execute(array(
            ':id' => $id,
            ':product' => $product,
            ':price' => $price,
            ':supplier' => $supplier,
            ':quantity' => $qty,
            ':bquantity' => $bqty,
            ':total' => $total,
            ':date(format)' => $supplier
        ));
        return true;
    }
    public function loadOtherExpenses(){
        $st = $this->db->prepare("SELECT * from other_expenses");
        $st->execute();
        return $st->fetchAll();
    }
    public function removeOtherExp($id){
        $sql=$this->db->prepare("DELETE FROM other_expenses WHERE Id=$id");
        $sql->execute();
        return true;
    }
    public function editOtherHistory($id,$description,$payment){
        $st = $this->db->prepare("UPDATE other_expenses SET description=:description,expense=:expense WHERE Id=:id");
        $st->execute(array(
            ':id' => $id,
            ':description' => $description,
            ':expense' => $payment
        ));
        return true;
    }
    //pdf generations
     public function fuelExpense() {

        $sql = $this->db->prepare("select sum(fuelpayment) as FuelExpense from fuel_expense");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
     public function fuelExpenseDetails() {

        $sql = $this->db->prepare("select expfueltype,capacity,date ,fuelpayment from fuel_expense");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
     public function lubricantExpense() {

        $sql = $this->db->prepare("select sum(total) as FuelExpense from lubricant_expense");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
     public function lubricantExpenseDetails() {

        $sql = $this->db->prepare("select product,price,supplier,quantity,bquantity,date,total from lubricant_expense");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
     public function otherExpense() {

        $sql = $this->db->prepare("select sum(expense) as FuelExpense from other_expenses");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
     public function otherExpenseDetails() {

        $sql = $this->db->prepare("select description,date,expense from other_expenses");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    
    public function totalExpense() {

        $sql = $this->db->prepare("select sum(total) from (select sum(fuelpayment) as total from fuel_expense union select sum(total) as total from lubricant_expense union select sum(expense) as total from other_expenses )t");
        $sql->execute();
        while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
            $stats[] = $obj;
        }
        return $stats;
    }
    public function insertFuelIncome($pmpName,$amount,$fuelType){
        $st = $this->db->prepare("INSERT INTO fuel_income (empID,fueltype,amount,date) VALUES (:empID,:fuelType,:amount,:date)");
        $st->execute(array(
            ':date' => Date('y-m-d'),
            ':empID' => $pmpName,
            ':fuelType' => $fuelType,
            ':amount' => $amount
        ));
        return true;
    }
    public function editPayment($id,$empName,$date,$paid){
        $st = $this->db->prepare("UPDATE payment SET empName=:empName,date=:date,paid=:paid WHERE Id=:id");
        $st->execute(array(
            ':id' => $id,
            ':empName' => $empName,
            ':date' => $date,
            ':paid' => $paid
        ));
        return true;
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