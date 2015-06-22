<?php

class suppliers extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('suppliers/index',false);
		}
                public function supplier_details(){
			//require('models/Supplier_model.php');
			//$model = new Supplier_model();
			//$data = $model->getSupplierDetails();
			$this->view->render('suppliers/supplier_details',false);
		}
                public function add_transaction(){
			//require('models/Supplier_model.php');
			//$model = new Supplier_model();
			//$data = $model->getSupplierDetails();
			$this->view->render('suppliers/add_transaction',false);
		}
                public function history(){
			//require('models/Supplier_model.php');
			//$model = new Supplier_model();
			//$data = $model->getSupplierDetails();
			$this->view->render('suppliers/history',false);
		}
	}
?>
