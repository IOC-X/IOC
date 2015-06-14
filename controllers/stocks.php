<?php 
	class Stocks extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('stocks/index',true);
		}
	}
?>