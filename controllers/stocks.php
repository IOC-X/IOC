<?php 
	class Stocks extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('stocks/index',false);
		}
		public function morning_stocks(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('stocks/morning_stocks',false);
		}
	}
?>