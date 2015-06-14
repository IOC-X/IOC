<?php 
	class Index extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('index/index',true);
		}
		public function logout(){
			Session::init();
			if(isset($_SESSION['loggedIn'])){
				Session::destroy();
				header('location:'.URL.'login');
			}
			else{
				echo "Oops something went wrong";
			}
		}
		public function signUp(){
			$this->view->render('index/signUp',false);
		}
	}
?>