<?php 
	class Stocks extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('stocks/index',false);
		}
		public function stocks(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('stocks/stocks',false);
		}
		public function morning_reading(){
			$this->view->render('stocks/morning_reading',false);
		}
		public function evening_reading(){
			$this->view->render('stocks/evening_reading',false);
		}
	}
?>