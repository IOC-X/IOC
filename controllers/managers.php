<?php

class managers extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('managers/index',false);
		}
                public function add_managers(){
                
            $this->view->render('managers/add_managers',false);
                
                }  
                public function database_managers(){
                
            $this->view->render('managers/database_managers',false);
                
                }
            public function list_managers(){
                
            $this->view->render('managers/list_managers',false);
                
                }
    }
	
?>
