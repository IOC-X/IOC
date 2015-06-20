<?php

class suppliers extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('suppliers/index',false);
		}
	}
?>
