<?php 

class Assets extends Controller
{
    
    function __construct() {
        parent::__construct();
    }
    
    public function index()
     {
        
        $this->view->render('assets/index',false);
        
        
     } 
     public function equipments(){
         
         $this->view->render('assets/equipments',false);
     }
     public function addequipments()
    {
         
         $this->view->render('assets/addequipments',false);
         
         
         
    }
    public function  viewequipments()
            {
        $this->view->render('assets/viewequipments',false);
            }
    
    public function supplier()
            {
        
        $this->view->render('assets/supplier',false);
        
     
        }
        public function add_supplier()
        {
            $this->view->render('assets/add_supplier',false);
        }
        public function view_supplier()
                {
            
            $this->view->render('assets/view_supplier',false);
                }
    }

           
            




?>