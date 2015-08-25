<?php 
	class Profile extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('profile/index',false);
		}
		public function loadProfileCode(){
			Session::init();
			$employeeCode = $_SESSION['loggedIn'];
			require 'models/Login_model.php';
			$model = new Login_model();
			//echo $model->loadProfileDetails($employeeCode);
			echo json_encode($model->loadProfileDetails($employeeCode));
//			echo json_encode($employeeCode);
		}
	}
?>