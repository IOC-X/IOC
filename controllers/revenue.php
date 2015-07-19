<?php
	
	/**
	* 
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
			$this->view->render('revenue/income',false);

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

	}
  ?>