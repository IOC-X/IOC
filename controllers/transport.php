<?php
	/**
	* transport module
	* controller for transport model
	*/
	class transport extends Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}
		public function index()
		{
			$this->view->render('transport/index',false);
		}
		public function report()
		{
			$this->view->render('transport/report',false);
		}
		public function emergencyTransport(){

		}
	}
  ?>