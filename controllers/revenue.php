<?php
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
        $sellingqty = isset($_POST['sellingqty']) ? trim($_POST['sellingqty']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $date1 = isset($_POST['date1']) ? trim($_POST['date1']) : null;
        $lubricantincome = isset($_POST['lubricantincome']) ? trim($_POST['lubricantincome']) : null;
         {
            $customers = $model->editLubincome($prdType, $quantity, $supplier, $sellingqty, $price, $date1, $lubricantincome, $prdIncomeID);
        }
    }

    public function delete_lubinc() {
        $id = $_POST['id'];
        $model = new Revenue_model();
        $transactions = $model->deleteLubincome($id);
    }

	}
  ?>