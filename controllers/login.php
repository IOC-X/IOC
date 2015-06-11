<?php 
	class Login extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			Session::init();
			if(!isset($_SESSION['loggedIn'])){
				$this->view->render('login/index',false);	
			}
			else{
				header('location:'.URL);
			}
		}
		public function login($argument = ""){
			echo $argument;
		}
		public function checkin(){
			$username = $_POST['username'];
			$password = $_POST['password'];

			require 'models/Login_model.php';
			$model = new Login_model();
			$model->login($username,$password);
		}
		//example for how to use a model
		public function signup(){
			require 'models/Login_model.php';
			$model = new Login_model();
			$model->signup();
			header('location:'.URL);
		}
	}
?>