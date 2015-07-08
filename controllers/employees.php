<?php

class employees extends Controller{

  function __construct(){
  	parent::__construct();
  }
  public function index(){
  	$this->view->render('employees/index',false);
  }
  public function add_employees(){
    $this->view->render('employees/add_employees',false);
  }
  public function list_employees(){
    $this->view->render('employees/list_employees',false);
  }
  public function loadListEmployees(){
    require_once('models/employees_model.php');
    $model = new Employees_model();
    $data = $model->list_employees();
    return $data;
  }

  public function insertEmployees(){
    $this->view->render('employees/list_employees',false);
    $code=$_POST['managercode'];
    $fname=$_POST['fnameManager'];
    $lname=$_POST['lnameManager'];
    $address=$_POST['address'];
    $nic=$_POST['nicnumber'];
    $hpnumber=$_POST['hpnumber'];
    $mpnumber=$_POST['mpnumber'];
    $bday=$_POST['birthdate'];
    $hireday=$_POST['hiredate'];
    $email=$_POST['inputEmail'];
    $user=$_POST['username'];
    $password=$_POST['userpassword'];
    $image=$_POST['inputFile'];
    $area=$_POST['textArea'];

    require_once('models/employees_model.php');

    $sendtomodel=new Employees_model();
    $sendtomodel->add_employees($code,$fname,$lname,$address,$nic,$hpnumber,$mpnumber,$bday,$hireday,$email,$user,$password,$image,$area);


  }
  public function searchEmployees(){
    require ('models/employees_model.php');
    $id=$_GET['id'];
    //echo $id;
    //$this->view->render('employees/update_employees',false);

    $sender = new Employees_model();
    $returndata = $sender->search_employees($id);
    //print_r($returndata);
    // while($row=$returndata->fetch(PDO::FETCH_ASSOC))
    // {
    // echo ($row["managerCode"]);
    // }
    }

}
?>
