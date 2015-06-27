<?php 
	class Carwash extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('carwash/index',false);
		}
		public function packages(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/packages',false);
		}
	}
?>