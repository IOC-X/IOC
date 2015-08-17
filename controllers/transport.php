<?php
	/**
	* transport module
	* controller for transport model
	*/
	class transport extends Controller
	{
		
		function __construct()
		{
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
			$this->view->render('transport/emergencyTransport/Add',false);
		}
		public function newEntry(){
			$this->view->render('transport/emergencyTransport/Add',false);
		}
		public function history(){
			$this->view->render('transport/emergencyTransport/history',false);
		}
	}
  ?>