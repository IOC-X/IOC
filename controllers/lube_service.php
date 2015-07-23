<?php
class Lube_service extends Controller{
   


    
    function __construct() {
        parent::__construct();
    }
//   index 
    public function index()
     {
        
        $this->view->render('lubricantService/index',false);
     } 
     
        //pac
     public function lu_packages()
     {
        
        $this->view->render('lubricantService/f_lu_packages/lu_packages',false);
        
     }
     
      public function lu_pac_gold()
     {
        
        $this->view->render('lubricantService/f_lu_packages/lu_pac_gold',false);
        
     }
     public function lu_pac_silver()
     {
        
        $this->view->render('lubricantService/f_lu_packages/lu_pac_silver',false);
        
     }
     public function lu_pac_custom()
     {
        
        $this->view->render('lubricantService/f_lu_packages/lu_pac_custom',false);
        
     }
     
     //cust
     public function lu_customer()
     {
        
        $this->view->render('lubricantService/f_lu_customer/lu_customer',false);
        
     }
}