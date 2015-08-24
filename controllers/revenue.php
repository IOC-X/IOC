<?php
require 'models/Revenue_model.php';
/**
	* revenue module
	* controller for revenue model
	* author @Sarasi Sumathipala
	*/
	class Revenue extends Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		public function index()
		{
			$this->view->render('revenue/index',false);
		}

		public function income()
		{
			$this->view->render('revenue/income/index',false);

		}
		public function lubricant_inc_history()
		{
			$this->view->render('revenue/income/lubricant_inc_history',false);

		}
		public function incomefuel()
		{
			$this->view->render('revenue/incomefuel',false);
		}

		public function expenses()
		{
			$this->view->render('revenue/expenses',false);
		}

		public function report()
		{
			$this->view->render('revenue/report',false);
		}

		public function payment()
		{
			$this->view->render('revenue/payment',false);
		}
		/**
		*	renders fuel tab in income section
		*	
		**/

		 public function addpay() {
        	$this->view->render('revenue/payment/pay_added', false);
    	}

    	 public function showpay() {
            
			$this->view->render('revenue/payment/pay_show',false);	
			
			}



		public function fuel(){
			$this->view->render('revenue/income/fuel',false);
		}
		/**
		*	renders lubricant tab in income section
		*	
		**/
		public function lubricants(){
			$this->view->render('revenue/income/lubricants',false);
		}

		/**
		*	renders overall income tab in income section
		*
		 **/

		public function overall(){
			$this->view->render('revenue/income/overall',false);
		}

		public function fuel_exp(){
			$this->view->render('revenue/expenses/fuelxp',false);
		}

		public function lubricants_exp()
		{
			$this->view->render('revenue/expenses/lubricantsxp',false);
		}

		public function other_exp()
		{
			$this->view->render('revenue/expenses/otherxp',false);
		}

		public function overall_exp()
		{
			$this->view->render('revenue/expenses/overall_exp',false);
		}

		public function insertlubricantinc(){
			require 'models/Revenue_model.php';

			$name=$_POST['lubname'];
			$price=$_POST['price'];
			$qty=$_POST['qty'];
			$supplier=$_POST['supplier'];
			$sqty=$_POST['sqty'];
			$inc=$_POST['income'];
			$date=$_POST['time'];


			$sendtomodel=new Revenue_model();
			$sendtomodel->addlubinc($name, $qty, $supplier, $price, $sqty, $inc, $date);
		}


		 public function editLubinc() {
        $model = new Revenue_model();
        $id = $_POST['id'];

        // $customer = $model->selectCustomerById($cust_id);

        $prdType = isset($_POST['prdType']) ? trim($_POST['prdType']) : null;
        $quantity = isset($_POST['quantity']) ? trim($_POST['quantity']) : null;
        $supplier = isset($_POST['supplier']) ? trim($_POST['supplier']) : null;
        $sellingqty = isset($_POST['sqty']) ? trim($_POST['sqty']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $date1 = isset($_POST['date']) ? trim($_POST['date']) : null;
        $lubricantincome = isset($_POST['lubincome']) ? trim($_POST['lubincome']) : null;
         {
            $customers = $model->editLubincome($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID);
        }
    }

    public function delete_lubinc() {
        $id = $_POST['idd'];
        $model = new Revenue_model();
        $transactions = $model->deleteLubincome($id);
    }
    
    
    
        public function lub_list() {
           
        $model = new Revenue_model();
        echo json_encode($model->select_lube());

    }


    public function delete_payment()
    {
    	$id=$_POST['id2'];
    	$model=new Revenue_model();
    	$transactions=$model->deletepayment($id);
    }



    public function pay_details() {
        $empid = $_POST['empid'];
        $empname = $_POST['empname'];
        $empnic = $_POST['nic'];
        $empdate = $_POST['date'];
        $empshifttype =$_POST['shifttype'];
        $empgrosssal = $_POST['grosssal'];
        $empepf = $_POST['epf'];
        $empnetsal = $_POST['netsal'];
        $paid = $_POST['paid'];
        $shiftToDb = new Revenue_model();
        $shiftToDb->add_payment($empid,$empname,$empnic,$empdate,$empshifttype,$empgrosssal,$empepf,$empnetsal,$paid);
    }

    public function pay_list()
    {
    	$model=new Revenue_model();
    	echo json_encode($model->select_pay());
    }

     public function editPayment() {
        //$model = new Revenue_model();
        $id = $_POST['id'];

        // $customer = $model->selectCustomerById($cust_id);

        $p1 = $_POST['empcode'];
        $p2 = $_POST['empname'];
        $p3 = $_POST['nic'];
        $p4 = $_POST['date'];
        $p5 = $_POST['shtype'];
        $p6 = $_POST['gsal'];
        $p7 = $_POST['epf'];
        $p8 = $_POST['nsal'];
        $p9 = $_POST['paid'];

        require 'models/Revenue_model.php';
        $model = new Revenue_model();

        if($model->editPay($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$id))
        {
        	return true;
        }

        else
        {
        	return false;
        }
         
    }


	  

	}
  ?>