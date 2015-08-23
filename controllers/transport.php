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
		/*
		*	edits emergency transport record
		*/
		public function editPumpReading(){
			$id = $_POST['Id'];
			$fullname = $_POST['fullname'];
			$nic = $_POST['nic'];
			$vehicleno = $_POST['vehicleno'];
			$contactno = $_POST['contactno'];
			$email = $_POST['email'];
			$description = $_POST['description'];

			require 'models/Transport_model.php';
			$model = new Transport_model();
			$model->editPumpReading($id,$fullname,$nic,$vehicleno,$contactno,$email,$description);

		}
		public function newEntry(){
			$this->view->render('transport/emergencyTransport/Add',false);
		}
		public function history(){
			$this->view->render('transport/emergencyTransport/history',false);
		}
		/*
		*	lubricant transport for branches 
		* 	render lubricant transport page
		*/
		public function lubricantTransport(){
			$this->view->render('transport/lubricantTransport/index',false);	
		}
		/*
		* 	loads lubricant transport date for AJAX request
		*	return type JSON
		*/
		public function loadLubricantTransport(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			echo json_encode($model->loadLubricantTransport());
		}
		public function addLubricantTransport(){
			$driver = $_POST['driver'];
			$branch = $_POST['branch'];
			$vehicleno = $_POST['vehicleno'];
			$product = $_POST['product'];

			require 'models/Transport_model.php';
			$model = new Transport_model();
			if($model->addLubricantTransport($driver,$branch,$vehicleno,$product)){
				echo "Success";
			}
		}
		/*
		* removes lubricant tranportation records
		*/
		public function removeLubricantTransport(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			$id = $_POST['ID'];
			if($model->removeLubricantTransport($id)){
				echo "Success";
			}
		}
		public function editLubricantTransport(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			$id = $_POST['Id'];
			$vehicleno = $_POST['vehicleno'];
			$driver = $_POST['driver'];
			$branch = $_POST['branch'];
			$product = $_POST['productno'];
			$model->editLubricantTransport($id,$vehicleno,$driver,$branch,$product);
		}
		public function branches(){
			$this->view->render('transport/branches/index',false);
		}
		/*
		* loads branch information
		*/
		public function loadBranchDetails(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			echo json_encode($model->loadBranchDetails());
		}
		public function addBranch(){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$address = $_POST['address'];
			require 'models/Transport_model.php';
			$model = new Transport_model();
			if($model->addBranch($name,$description,$address)){
				echo "Success";
			}
		}
		public function cardTemplate(){
			$this->view->render('transport/branches/cardTemplate',false);
		}
		/*
		*	Removes branch 
		*/
		public function removeBranch(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			$id = $_POST['ID'];
			if($model->removeBranch($id)){
				echo "Success";
			}
		}
		/*
		*	returns one branch record at a time
		*/
		public function getBranchSpec(){
			require 'models/Transport_model.php';
			$model = new Transport_model();
			$id = $_GET['ID'];
			echo json_encode($model->getBranchSpec($id));
		}
		/*
		*	edits branch info
		*/
		public function editBranch(){
			$id = $_POST['Id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			$address = $_POST['address'];
			require 'models/Transport_model.php';
			$model = new Transport_model();

			$model->editBranch($id,$name,$description,$address);
		}
	}
  ?>