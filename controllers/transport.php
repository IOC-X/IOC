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
		/*
		* Inserts emgTransport entries
		*/
		public function addEmgTransport(){
			$fullname = $_POST['fullname'];
			$nic = $_POST['nic'];
			$vehicleno = $_POST['vehicleno'];
			$contact = $_POST['contact'];
			$description = $_POST['description'];
			$email = $_POST['email'];
			
			require 'models/Transport_model.php';
			$model = new Transport_model();
			if($model->addEmgTransport($fullname,$nic,$vehicleno,$contact,$description,$email)){
				echo "Success";
			}
		}
		/**
		*	loads data for emergency transport table
		*/
		public function loadEmgTransport(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			echo json_encode($model->loadEmgTransport());
		}
		/*
		*	removes emergency transport record
		*/
		public function removeEmgTransport(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			$id = $_POST['ID'];
			if($model->removeEmgTransport($id)){
				echo "Success";
			}
		}
		public function newEntry(){
			$this->view->render('transport/emergencyTransport/Add',false);
		}
		public function history(){
			$this->view->render('transport/emergencyTransport/history',false);
		}
	}
  ?>