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
    public function loadEquipments(){
			require 'models/Assets_model.php';

			$model = new Assets_model();
			echo json_encode($model->loadEquipments());
		}
                public function removeEquipments(){
			require 'models/Assets_model.php';
			$id = $_POST['ID'];
			$model = new Assets_model();
			$model->removeEquipments($id);
			echo "Done";
		}
    public function supplier()
            {
        
        $this->view->render('assets/supplier',false);
        
     
        }
        public function database_backup()
            {
        
        $this->view->render('assets/database_backup',false);
        
     
        }
        public function add_supplier()
        {
            $this->view->render('assets/add_supplier',false);
        }
        public function view_supplier()
                {
          
            $this->view->render('assets/view_supplier',false);
              
          }
             public function inform_supplier(){
                    $this->view->render('assets/inform_supplier',false);      
                }

           public function insert_equipments(){
            
            require 'models/Assets_model.php';
            $type = $_POST['type'];
            $name = $_POST['name'];
            $produce_code = $_POST['produce-code'];
            $motor_make = $_POST['motor-make'];
            $manufactor_date = $_POST['manufacturing-date'];
            
            $model = new Assets_model();
            $model->insert_equipments($produce_code,$motor_make,$type,$manufactor_date,$name);
           
        }
             
        public function insert_supplier()
        {
            require 'models/Assets_model.php';
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $company = $_POST['company'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $nic =  $_POST['nic'];
            $type = $_POST['type'];
            
            $model = new Assets_model();
            $model->add_assets_supplier1($fname,$lname,$company,$address,$email,$pnumber,$nic,$type);
                         
                    
            
        }
    
               
        public function  load_Supplier(){
            
            require 'models/Assets_model.php';
            
            $model = new Assets_model();
            echo json_encode($model->load_Supplier());
            
        }
                public function remove_supplier(){
			require 'models/Assets_model.php';
			$id = $_POST['ID'];
			$model = new Assets_model();
			$model->remove_supplier($id);
			echo "Done";
		}

                  public function database_validate(){
			require 'models/Assets_model.php';

			$model = new Assets_model();
			echo json_encode($model->database_validate());
		}

        
        public function data_backup()
           {
            require 'models/Assets_model.php';
            $confirm = $_POST['confirm'];
            if(isset($confirm)){
                           $model = new Assets_model();
                            if($model->data_backup($confirm)){
                                            return true;
                                    }
                                    else{
                                            return false;
                                    }
                
            }
            else{
                
            }
 	
            
            
           }
        

           public function sendemail()
           {
              require 'models/Assets_model.php';
              $email = $_POST['email'];
              $user = $_POST['user'];
              $subject = $_POST['subject'];
              $body = $_POST['body'];
             
                $model = new Assets_model();
                $model->sendemail($email,$user,$subject,$body);
              
           }
           
    public function updateas() {
 require 'models/Assets_model.php';

        $aname = $_POST['name'];
        $acode = $_POST['produce-code'];
        $atype = $_POST['type'];
        $amakedate = $_POST['manufacturing-date'];
        $aid = $_POST['idd'];
        
        $model = new Assets_model();
        $model->update_equipment($aname,$acode,$atype,$amakedate,$aid);  
    
    }
      
    
            public function update_supplier()
        {
            require 'models/Assets_model.php';
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $company = $_POST['company'];
            $nic =  $_POST['nic'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $address = $_POST['address'];
            $type = $_POST['type'];
            $id = $_POST['iddd'];
            $model = new Assets_model();
            $model->update_supplier1($fname,$lname,$company,$address,$email,$pnumber,$nic,$type,$id);
                         
                    
            
        }
           
}        ?>