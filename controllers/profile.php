<?php 
	class Profile extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			//$data = self::loadProfileCode();
			//print_r($data);
			$this->view->render('profile/index',false);
		}
		public function loadProfileCode(){
			Session::init();
			$employeeName = $_SESSION['loggedIn'];
			require 'models/Login_model.php';
			$model = new Login_model();
			$data = $model->getEmployeeCode($employeeName);
			//print_r($data);
			$empCode = $data[0][0];
			$data = $model->loadProfileDetails($empCode);
			return $data;
			//echo json_encode($model->loadProfileDetails($employeeCode));
//			echo json_encode($employeeCode);
		}
	}
?>