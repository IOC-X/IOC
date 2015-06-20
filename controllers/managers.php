<?php

class managers extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('managers/index',true);
		}
                public function add_managers(){
                
            $this->view->render('managers/add_managers',true);
                
                }  
                public function database_managers(){
                
            $this->view->render('managers/database_managers',true);
                
                }
            public function list_managers(){
                
            $this->view->render('managers/list_managers',true);
                
                }
    }
	
?>
