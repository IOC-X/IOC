<?php
class clients extends Controller{

    function __construct(){
require_once('models/clients_model.php');
        parent::__construct();
		}
		public function index(){
			$this->view->render('clients/index',false);
		}
		
		public function addclient(){
			$this->view->render('clients/add_clients',false);
		}
                
                public function client_management(){
                    $this->view->render('clients/client_management', false);
                    
                }
                
                  public function client_transactions(){
                    $this->view->render('clients/client_transactions', false);
                    
                }
                
                
                public function listclients(){
                    $this->view->render('clients/listclient',false);	     
                
                    
                }
                public function getclientdata(){
                     $model=new clients_model();
                     
                     echo json_encode($model->list_clients());
                }
                
               public function addclientin() {
               include 'views/clients/add_client.php';
               
               
               }
   
                
                public function insertClients(){
                    
                        $autocode=$_POST['client_code'];
                        $fname=$_POST['client_fname'];
                        $lname=$_POST['client_lname'];
                        $address=$_POST['client_address'];
                        $nic=$_POST['client_nic'];
                        $phone=$_POST['client_phone'];
                        $purchasedate=$_POST['client_purchase_date'];
                        $amount=$_POST['client_purchase_amount'];
                    
//                       echo $code,"-",$fname,"-",$lname,"-",$address,"-",$nic,"-",$phone,"-",$purchase_date,"-",$amount;
                    require_once('models/clients_model.php');
                    $sendtomodel=new clients_model();
                    $sendtomodel->addclient($autocode,$fname,$lname,$address,$nic,$phone,$purchasedate,$amount);
                }
                
                public function updateclients() {

                        $autocode=$_POST['client_code'];
                        $fname=$_POST['client_fname'];
                        $lname=$_POST['client_lname'];
                        $address=$_POST['client_address'];
                       
                        $phone=$_POST['client_phone'];
                        
                   
        
                            $sendtomodel=new clients_model();
                            $sendtomodel->update_clients($autocode,$fname,$lname,$address,$phone);
    }
                
                public function insertTranactions(){
                        $client_id=$_POST['client_id'];
                        $client_name=$_POST['client_name'];
                        $client_vechicle=$_POST['client_pump_vechicle'];
                        $client_pump_by=$_POST['client_pump_by'];
                        $pump_date=$_POST['pump_date'];
                        $fuel_type=$_POST['fuel_type'];
                        $pump_number=$_POST['client_pump_no'];
                        $pump_liters=$_POST['client_pump_liters'];
                        $pump_value=$_POST['client_pump_value'];
                        
                        require_once('models/client_model.php');
                        $sendtomodel=new clients_model();
                        $sendtomodel->addtransactions($client_id,$client_name,$client_vechicle,$client_pumper,$pump_date,$fuel_type,$pump_number,$pump_liters,$pump_liters,$pump_value);
               
                }


                public function searchClients(){
                    require ('models/clients_model.php');
                    $id=$_GET['autocode'];
                    $sender=new clients_model();
                    $returndata=$sender->search_clients($id);
                    
                    
                }
                public function deleteClients(){
                        
                        $id=$_POST['idclients'];
                        $model =new clients_model();
                        $delete = $model->deleteClients($id);
                      
                 
                }
	}
?>
