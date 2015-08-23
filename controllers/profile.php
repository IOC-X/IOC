<?php 
	class Profile extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('profile/index',false);
		}
	}
?>