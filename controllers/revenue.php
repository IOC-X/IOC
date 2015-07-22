<?php
	/**
	* revnue module
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
	}
  ?>