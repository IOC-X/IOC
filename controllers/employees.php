<?php

require_once('models/employees_model.php');

class employees extends Controller {

    function __construct() {
        
        parent::__construct();
    }

    public function redirect($location) {
        header('Location: ' . $location);
    }

    public function index() {
        $this->view->render('employees/index', false);
    }

    public function add_employees() {

        $this->view->render('employees/empSub/add_employees', false);
    }

    public function employee_main() {

        $this->view->render('employees/employee_main', false);
    }
		
    public function list_employees() {

        $model = new Employees_model();
       echo json_encode($model->list_employee());
        

    }
        public function loadlistemp() {
            
$this->view->render('employees/empSub/list_employees',false);	     

    }

    public function insertEmployees() {
     $code = $_POST['managercode'];
        $fname = $_POST['fnameManager'];
        $lname = $_POST['lnameManager'];
        $address = $_POST['address'];
        $nic = $_POST['nicnumber'];
        $mpnumber = $_POST['mpnumber'];
        $bday = $_POST['birthdate'];
        $hireday = $_POST['hiredate'];
        $emptyp=$_POST['emptype'];
        $user = $_POST['username'];
        $password = $_POST['userpassword'];
        $image=$_POST['sam'];
        

           $sendtomodel=new Employees_model();
           $sendtomodel->add_employees($code,$fname,$lname,$address,$nic,$mpnumber,$bday,$hireday,$emptyp,$user,$password,$image);
    }

    public function searchEmployees() {
 $idemp= $_GET['id'];
 echo $idemp;
        $model = new Employees_model();
        $searchemp = $model->search_employees($idemp);
        include '/views/employees/empSub/update_employees.php';
    
    }
    
        public function delete_employees() {

        $empid = $_POST['idValue'];
        echo $empid;
        $model = new Employees_model();
        $delete = $model->delete_employee($empid);
     }

         public function updateEmployees() {

         
          $code = $_POST['managercode'];
        $fname = $_POST['fnameManager'];
        $lname = $_POST['lnameManager'];
        $address = $_POST['address'];
        $nic = $_POST['nicnumber'];
        $mpnumber = $_POST['mpnumber'];
        $bday = $_POST['birthdate'];
        $hireday = $_POST['hiredate'];
        
        $user = $_POST['username'];
        $password = $_POST['userpassword'];
        $image=$_POST['inputFile'];
        
           $sendtomodel=new Employees_model();
           $sendtomodel->update_employees($code,$fname,$lname,$address,$nic,$mpnumber,$bday,$hireday,$user,$password,$image);
    }
     
    //stating of shift management
    
    
    
    public function shiftMain() {
        $this->view->render('employees/shift_main', false);
    }

        public function shiftload() {
            
$this->view->render('employees/shift_sub/shift_list',false);	     

    }
    
    public function shift_list() {
        $model = new Employees_model();
        echo json_encode($model->select_shift());

    }

    public function shift_add() {
        $this->view->render('employees/shift_sub/shift_added', false);
    }

    public function shift_newdetails() {
        $shiftid = $_POST['shiftid'];
        $shiftname = $_POST['shiftname'];
        $shiftduration = $_POST['shiftduration'];
        $shiftrate = $_POST['shiftrate'];
        $shiftcolour =$_POST['shiftco'];
        $shiftToDb = new Employees_model();
        $shiftToDb->add_shift($shiftid, $shiftname, $shiftduration, $shiftrate,$shiftcolour);
    }

    public function shift_search() {
        $id = $_GET['id'];
        $model = new Employees_model();
        $search = $model->search_shift($id);
        include '/views/employees/shift_sub/shift_updated.php';
    }

    public function shift_update() {


        $shiftupid = $_POST['shiftid'];
        $shiftupname = $_POST['shiftname'];
        $shiftupduration = $_POST['shiftduration'];
        $shiftuprate = $_POST['shiftrate'];
        
        
        $shiftToupdate = new Employees_model();
        $shiftToupdate->update_shift($shiftupid, $shiftupname, $shiftupduration, $shiftuprate);  
    
    }

    public function delete_shift() {

        $id = $_POST['idshift'];
        $model = new Employees_model();
        $delete = $model->delete_shift($id);

    }

    //start of attendance 
    public function attendance_main() {

        $this->view->render('employees/attendance_main', false);
    }

    public function history_attendance() {
//        $x = 0;
//        if (x > 0) {
//            
//        }
        $model = new Employees_model();
        $getemp1 = $model->list_employee();
        include '/views/employees/attendance/historyOfAttendance.php';
        // $this->view->render('employees/attendance/historyOfAttendance', false);
    }

    public function current_attendance() {
        include '/views/employees/attendance/current_attendance.php';
    }
	
    public function attendance_list() {
        $model = new Employees_model();
        echo json_encode($model->select_attendance());

    }
    public function addattend(){
        
        
        $empcode= $_POST['gotemp'];
        $shiftcode= $_POST['shiftidd'];
        $shiftprice= $_POST['shiftrated'];
        $atyear= $_POST['atyear'];
        $atmonth= $_POST['atmonth'];
        $atdate= $_POST['atdate'];
        $starttime= $_POST['timesid'];
        $colour= $_POST['shiftcolourd'];
        $pumpto=$_POST['pumpidd'];


        $attdto = new Employees_model();
        $attdto->addAttendance($empcode,$shiftcode,$shiftprice,$atyear,$atmonth,$atdate,$starttime,$colour,$pumpto);
        
    }
    public function addabc(){
        $empcode = $_POST['idac'];
        $yearyear=$_POST['idyear'];
        $monthmonth=$_POST['idmonth'];
        $datedate=$_POST['iddate'];
       
        $addab = new Employees_model();
        $addab->markabsence($empcode,$yearyear,$monthmonth,$datedate);
    }
        public function with31month() {
        $this->view->render('employees/attendance/monthwith31', false);
    }
            public function with30month() {
        $this->view->render('employees/attendance/monthwith30', false);
    }
            public function with29month() {
        $this->view->render('employees/attendance/monthwith29', false);
    }
            public function with28month() {
        $this->view->render('employees/attendance/monthwith28', false);
    }
 
        public function addfinish(){
        $empcode = $_POST['idac'];
        $yearyear=$_POST['idyear'];
        $monthmonth=$_POST['idmonth'];
        $datedate=$_POST['iddate'];
        $timetime=$_POST['idtime'];
        

        $addfin= new Employees_model();
        $addfin->markfinish($empcode,$yearyear,$monthmonth,$datedate,$timetime);
    }

}

?>
