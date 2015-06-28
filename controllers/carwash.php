<?php 
	class Carwash extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('carwash/index',false);
		}
		public function packages(){
                    require_once('models/Carwash_model.php');
			$data = Carwash_model::getPackages();
                        print_r($data);
			$this->view->render('carwash/packages',false);
		}
                public function transactions(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/transactions',false);
		}
                public function regular_customers(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/regular_customers',false);
		}
                public function report(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/report',false);
		}
	}
?>