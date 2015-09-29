<?php

//require 'models/Revenue_model.php';
/**
 * revenue module
 * controller for revenue model
 * author @Sarasi Sumathipala
 */
class Revenue extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('revenue/index', false);
    }

    public function income() {
        $this->view->render('revenue/income/index', false);
    }

    public function lubricants() {
        $this->view->render('revenue/income/lubricants', false);
    }

    public function loadLubricantProducts() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadLubricantProducts());
    }

    public function loadLubricantDataSpec() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_GET['ID'];
        echo json_encode($model->loadLubricantDataSpec($id));
    }

    public function insertlubricantinc() {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qnty = $_POST['quantity'];
        $supplier = $_POST['supplier'];
        $sqty = $_POST['sqnty'];
        $total = $_POST['total'];
        // echo "haha" + $price;
        // echo $name;
        
        // echo $name;
        // echo $price;
        // echo $qnty;
        // echo $supplier;
        // echo $sqty;
        // echo $total;
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        if($model->insertlubricantinc($name,$price,$qnty,$supplier,$sqty,$total)){
        	echo "Success";
        }
    }

    public function overall() {
        $this->view->render('revenue/income/overall', false);
    }

    public function loadOverall() {
        
    }

    public function fuel() {
        $this->view->render('revenue/income/fuel', false);
    }

    public function loadActivePumpers() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadActivePumpers());
    }

    public function expenses() {
        $this->view->render('revenue/expenses', false);
    }

    public function fuel_exp() {
        $this->view->render('revenue/expenses/fuelxp', false);
    }

    public function fuelexp_details() {
        
    }

    public function loadFuelExpData() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $type = $_GET['type'];
        echo json_encode($model->loadFuelExpData($type));
    }

    public function addfuelexpDetails() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $type = $_POST['fuel'];
        $capacity = $_POST['capacity'];
        $payment = $_POST['payment'];
        // echo $type . $capacity . $payment;
        if ($model->addfuelexpDetails($type, $capacity, $payment)) {
            echo "Success";
        }
    }

    public function lubricants_exp() {
        $this->view->render('revenue/expenses/lubricantsxp', false);
    }

    public function insertlubricantExp() {
        $prd = $_POST['prd'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $supplier = $_POST['supplier'];
        $bqnty = $_POST['bqnty'];
        $total = $_POST['total'];


        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        if ($model->insertlubricantExp($prd, $price, $qty, $supplier, $bqnty, $total)) {
            echo "Success";
        }
    }

    public function other_exp() {
        $this->view->render('revenue/expenses/otherxp', false);
    }

    public function insertOtherExpenses() {

        $description = $_POST['description'];
        $expense = $_POST['expense'];
        require 'models/Revenue_model.php';

        $model = new Revenue_model();
        if ($model->insertOtherExpenses($description, $expense)) {
            echo "Success";
        }
    }

    public function addpay() {
        $this->view->render('revenue/payment/pay_added', false);
    }

    public function loadEmpData() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();

        echo json_encode($model->loadEmpData());
    }

    public function loadEmpDataSpec() {
        $empCode = $_GET['empCode'];
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadEmpDataSpec($empCode));
    }

    public function getShiftDetails() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();

        $empCode = $_GET['empCode'];
        $year = $_GET['year'];
        $month = $_GET['month'];
        $date = $_GET['date'];
//			echo json_encode($empCode);
        echo json_encode($model->getShiftDetails($empCode, $year, $month, $date));
    }

    public function pay_details() {
        $empid = $_POST['empid'];
        $empname = $_POST['empname'];
        $nic = $_POST['nic'];

        $salary = $_POST['salary'];

        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        if ($model->pay_details($empid, $empname, $nic, $salary)) {
            echo "Success";
        }
    }

    public function showpay() {
        $this->view->render('revenue/payment/pay_show', false);
    }

    public function pay_list() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->pay_list());
    }

    public function delete_payment() {
        require 'models/Revenue_model.php';
        $id = $_POST['id'];
        $model = new Revenue_model();
        $transactions = $model->deletepayment($id);
    }

    public function historyFuel() {
        $this->view->render('revenue/expenses/historyFuel', false);
    }

    public function loadFuelExpenses() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadFuelExpenses());
    }

    public function removeFuelHis() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_POST['ID'];
        $model->removeFuelHis($id);
    }

    public function editFuelHistory() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_POST['Id'];
        $fuel = $_POST['fuel'];
        $capacity = $_POST['capacity'];
        $date = $_POST['date'];
        $payment = $_POST['payment'];

        if ($model->editFuelHistory($id, $fuel, $capacity, $date, $payment)) {
            echo "Success";
        }
    }

    public function historyLubricants() {
        $this->view->render('revenue/expenses/historyLubricant', false);
    }

    public function loadLubricantExpenses() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadLubricantExpenses());
    }

    public function removeLubricantHis() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_POST['ID'];
        if ($model->removeLubricantHis($id)) {
            echo "Success";
        }
    }

    public function editLubricantHistory() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();

        $id = $_POST['Id'];
        $product = $_POST['product'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $qty = $_POST['qty'];
        $bqty = $_POST['bquantity'];
        $total = $_POST['total'];
        $supplier = $_POST['supplier'];
        $model->editLubricantHistory($id, $product, $price, $date, $qty, $bqty, $total, $supplier);
    }

    public function historyOther() {
        $this->view->render('revenue/expenses/historyOther', false);
    }

    public function loadOtherExpenses() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        echo json_encode($model->loadOtherExpenses());
    }

    public function removeOtherExp() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_POST['ID'];
        if ($model->removeOtherExp($id)) {
            echo "Success";
        }
    }

    public function editOtherHistory() {
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $id = $_POST['Id'];
        $description = $_POST['description'];
        $payment = $_POST['payment'];

        if ($model->editOtherHistory($id, $description, $payment)) {
            echo "Success";
        }
    }

    // public function lubricant_inc_history()
    // {
    // 	$this->view->render('revenue/income/lubricant_inc_history',false);
    // }
    // public function incomefuel()
    // {
    // 	$this->view->render('revenue/incomefuel',false);
    // }



    public function report() {
        $this->view->render('revenue/report', false);
    }
    
    public function ExpensepdfReportDisplay(){
        include 'views/revenue/report/expenseDisplay.php';
    }
    
    public function  ExpensepdfReport(){
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        //fuel
        $Expenses = $model->fuelExpenseDetails();
        $sum = $model->fuelExpense();
        //lubricant
        $lub_Expenses = $model->lubricantExpenseDetails();
        $lub_sum = $model->lubricantExpense();
        //other
        $other_Expenses = $model->otherExpenseDetails();
        $other_sum = $model->otherExpense();
        //grand total
        $grandTotal = $model->totalExpense();
        include 'views/revenue/report/expense.php';
    }

    public function payment() {
        $this->view->render('revenue/payment', false);
    }
    public function insertFuelIncome(){
        $pmpName = $_POST['pmpName'];
        $amount = $_POST['amount'];
        $fuelType = $_POST['fuelType'];
        // echo $pmpName;
        // echo $amount;
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $model->insertFuelIncome($pmpName,$amount,$fuelType);
    }
    public function editPayment(){
        $id = $_POST['id'];
        $empCode = $_POST['empCode'];
        $empName = $_POST['empName'];
        $date = $_POST['date'];
        $paid = $_POST['paid'];

        echo $empCode;
        require 'models/Revenue_model.php';
        $model = new Revenue_model();
        $model->editPayment($id,$empName,$date,$paid);
    }
    // /**
    // *	renders fuel tab in income section
    // *	
    // **/
    //   	 public function showpay() {
    // 	$this->view->render('revenue/payment/pay_show',false);	
    // }
    // public function fuel(){
    // 	$this->view->render('revenue/income/fuel',false);
    // }
    // /**
    // *	renders lubricant tab in income section
    // *	
    // **/
    // public function lubricants(){
    // 	$this->view->render('revenue/income/lubricants',false);
    // }
    // /**
    // *	renders overall income tab in income section
    // *
    //  **/
    // public function overall(){
    // 	$this->view->render('revenue/income/overall',false);
    // }
    // 
    // public function lubricants_exp()
    // {
    // 	$this->view->render('revenue/expenses/lubricantsxp',false);
    // }
    // public function other_exp()
    // {
    // 	$this->view->render('revenue/expenses/otherxp',false);
    // }
    // public function overall_exp()
    // {
    // 	$this->view->render('revenue/expenses/overall_exp',false);
    // }
    // public function loadLubricantProducts(){
    // 	// require 'models/Revenue_model.php';
    // 	// $model = new Revenue_model();			
    // 	// return json_encode($model->loadLubricantProducts());
    // 	$name = "Rajika";
    // 	return json_encode($name);
    // }
    // public function insertlubricantinc(){
    // 	// require 'models/Revenue_model.php';
    // 	// $name=$_POST['lubname'];
    // 	// $price=$_POST['price'];
    // 	// $qty=$_POST['qty'];
    // 	// $supplier=$_POST['supplier'];
    // 	// $sqty=$_POST['sqty'];
    // 	// $inc=$_POST['income'];
    // 	// $sendtomodel=new Revenue_model();
    // 	// $sendtomodel->addlubinc($name, $qty, $supplier, $price, $sqty, $inc, $date);
    // }
    //  public function editLubinc() {
    //  	require 'models/Revenue_model.php';
    //       $model = new Revenue_model();
    //       $id = $_POST['id'];
    //       // $customer = $model->selectCustomerById($cust_id);
    //       $prdType = isset($_POST['prdType']) ? trim($_POST['prdType']) : null;
    //       $quantity = isset($_POST['quantity']) ? trim($_POST['quantity']) : null;
    //       $supplier = isset($_POST['supplier']) ? trim($_POST['supplier']) : null;
    //       $sellingqty = isset($_POST['sqty']) ? trim($_POST['sqty']) : null;
    //       $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    //       $date1 = isset($_POST['date']) ? trim($_POST['date']) : null;
    //       $lubricantincome = isset($_POST['lubincome']) ? trim($_POST['lubincome']) : null;
    //        {
    //           $customers = $model->editLubincome($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID);
    //       }
    //   }
    //   public function delete_lubinc() {
    //   	require 'models/Revenue_model.php';
    //       $id = $_POST['idd'];
    //       $model = new Revenue_model();
    //       $transactions = $model->deleteLubincome($id);
    //   }
    //       public function lub_list() {
    //          require 'models/Revenue_model.php';
    //       $model = new Revenue_model();
    //       echo json_encode($model->select_lube());
    //   }
    //   public function delete_payment()
    //   {
    //   	$id=$_POST['id2'];
    //   	$model=new Revenue_model();
    //   	$transactions=$model->deletepayment($id);
    //   }
    //   public function pay_details() {
    //   	require 'models/Revenue_model.php';
    //       $empid = $_POST['empid'];
    //       $empname = $_POST['empname'];
    //       $empnic = $_POST['nic'];
    //       $empdate = $_POST['date'];
    //       $empshifttype =$_POST['shifttype'];
    //       $empgrosssal = $_POST['grosssal'];
    //       $empepf = $_POST['epf'];
    //       $empnetsal = $_POST['netsal'];
    //       $paid = $_POST['paid'];
    //       $shiftToDb = new Revenue_model();
    //       $shiftToDb->add_payment($empid,$empname,$empnic,$empdate,$empshifttype,$empgrosssal,$empepf,$empnetsal,$paid);
    //   }
    //   public function pay_list()
    //   {
    //   	require 'models/Revenue_model.php';
    //   	$model=new Revenue_model();
    //   	echo json_encode($model->select_pay());
    //   }
    //    public function editPayment() {
    //       //$model = new Revenue_model();
    //       require 'models/Revenue_model.php';
    //       $id = $_POST['id'];
    //       // $customer = $model->selectCustomerById($cust_id);
    //       $p1 = $_POST['empcode'];
    //       $p2 = $_POST['empname'];
    //       $p3 = $_POST['nic'];
    //       $p4 = $_POST['date'];
    //       $p5 = $_POST['shtype'];
    //       $p6 = $_POST['gsal'];
    //       $p7 = $_POST['epf'];
    //       $p8 = $_POST['nsal'];
    //       $p9 = $_POST['paid'];
    //       require 'models/Revenue_model.php';
    //       $model = new Revenue_model();
    //       if($model->editPay($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$id))
    //       {
    //       	return true;
    //       }
    //       else
    //       {
    //       	return false;
    //       }
    //   }
}

?>