<?php

class Employees_model extends Model {

    private $value;

    function __construct() {
        parent::__construct();
    }

    public function list_employee() {
        $results = $this->db->prepare("SELECT * FROM employee_list");
        $results->execute();
        return $results->fetchAll();
    }

    public function add_employees($code, $fname, $lname, $address, $nic, $mpnumber, $bday, $hireday, $emptyp, $user, $password, $image) {

        $adder = $this->db->prepare("INSERT INTO employee_list (employeeCode,firstName,lastName,address,nicNumber,mobilePhone,birthDate,hireDate,emptype,userName,userPassword,userFile)
                            VALUES(:code,:fname,:lname,:address,:nicNumber,:mobilePhone,:birthDate,:hireDate,:emptype,:userName,:password,:file)");

        $adder->execute(array(':code' => $code, ':fname' => $fname, ':lname' => $lname, ':address' => $address, ':nicNumber' => $nic, ':mobilePhone' => $mpnumber, ':birthDate' => $bday, ':hireDate' => $hireday, ':emptype' => $emptyp, ':userName' => $user, ':password' => $password, ':file' => $image));
    }
    
        public function update_employees($code, $fname, $lname, $address, $nic, $mpnumber, $bday, $hireday,$user, $password, $image) {

        $adder = $this->db->prepare("UPDATE employee_list SET firstName=?,lastName=?,address=?,nicNumber=?,mobilePhone=?,birthDate=?,hireDate=?,userName=?,userPassword=?,userFile=? WHERE employeeCode=? LIMIT 1");
                            
         $adder->bindValue(1, $fname);
         $adder->bindValue(2, $lname);
         $adder->bindValue(3, $address);
         $adder->bindValue(4, $nic);
         $adder->bindValue(5, $mpnumber);
         $adder->bindValue(6, $bday);
         $adder->bindValue(7, $hireday);
         $adder->bindValue(8, $user);
         $adder->bindValue(9, $password);
         $adder->bindValue(10, $image);
         $adder->bindValue(11, $code);
        $adder->execute();
    }

    public function search_employees($idemp) {
        $sql = $this->db->prepare("SELECT * FROM employee_list WHERE countid = $idemp");
        //  $sql->bindValue(1, $shiftid);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function delete_employee($empid) {

        $sql = $this->db->prepare("DELETE FROM employee_list WHERE employeeCode	=:empid");


        $sql->execute(array(
            ':empid' => $empid
        ));
    }

//start of shift db part

    public function select_shift() {
        $results = $this->db->prepare("SELECT * FROM shiftdb");
        $results->execute();
        return $results->fetchAll();
    }

    public function add_shift($shiftid, $shiftname, $shiftduration, $shiftrate,$shiftcolour) {

        $shift = $this->db->prepare("INSERT INTO shiftdb (shiftId,shiftName,shiftDuration,shiftRate,shiftcolor)
                            VALUES(:id,:name,:duration,:rate,:colorr)");

        $shift->execute(array(':id' => $shiftid, ':name' => $shiftname, ':duration' => $shiftduration, ':rate' => $shiftrate,':colorr'=>$shiftcolour));
    }

    public function search_shift($shiftid) {

        $sql = $this->db->prepare("SELECT * FROM shiftdb WHERE shiftId = ?");
        $sql->bindValue(1, $shiftid);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function update_shift($shiftupid, $shiftupname, $shiftupduration, $shiftuprate) {

        $sql = $this->db->prepare("UPDATE shiftdb SET shiftName=?,shiftDuration=?,shiftRate=? WHERE shiftId =? LIMIT 1");
        $sql->bindValue(1, $shiftupname);
        $sql->bindValue(2, $shiftupduration);
        $sql->bindValue(3, $shiftuprate);
        $sql->bindValue(4, $shiftupid);
        $sql->execute();
    }

    public function delete_shift($id) {

        $sql = $this->db->prepare("DELETE FROM shiftdb WHERE shiftId=?");
        $sql->bindValue(1, $id);
        $sql->execute();
    }

//attendance data base action come here 
    public function addAttendance($empcode,$shiftcode,$shiftprice,$atyear,$atmonth,$atdate,$starttime,$colour,$pumpto) {
        $attend = $this->db->prepare("INSERT INTO attendance (empCode,shiftCode,shiftprice,atyear,atmonth,atdate,startTime,colour,pumps)
                            VALUES(:empcode,:shiftcode,:shiftprice,:atyear,:atmonth,:atdate,:starttime,:colour,:pumpto)");

        $attend->execute(array(':empcode' => $empcode, ':shiftcode' => $shiftcode, ':shiftprice' => $shiftprice, ':atyear' => $atyear,':atmonth'=>$atmonth,':atdate'=>$atdate,':starttime'=>$starttime,':colour'=>$colour,'pumpto'=>$pumpto));
    
    }

}

?>
	