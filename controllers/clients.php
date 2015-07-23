<?php
require_once('models/clients_model.php');
class clients extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('clients/index',false);
		}
		
		public function addclient(){
			$this->view->render('clients/add_clients',false);
		}
                
                public function client_management(){
                    $this->view->render('clients/listclient', false);
                    
                }
                
                public function listclients(){
                    

                    $this->view->render('clients/listclient',false);	     
                    
                }
                public function getclientdata(){
                   
                    $model=new clients_model();
                     echo json_encode($model->list_clients());
                }
                
               
                
                public function insertClients(){
                        $code=$_POST['client_code'];
                        $fname=$_POST['client_fname'];
                        $lname=$_POST['client_lname'];
                        $address=$_POST['client_address'];
                        $nic=$_POST['client_nic'];
                        $phone=$_POST['client_phone'];
                        $purchase_date=$_POST['client_purchase_date'];
                        $amount=$_POST['client_purchase_amount'];
                    
                        echo $code,"-",$fname,"-",$lname,"-",$address,"-",$nic,"-",$phone,"-",$purchase_date,"-",$amount;
                require_once('models/clients_model.php');
                        $sendtomodel=new Clients_model();
                        $sendtomodel->add_clients($code,$fname,$lname,$address,$nic,$phone,$purchase_date,$amount);
                }
                
                public function searchClients(){
                    require ('models/clients_model.php');
                    $id=$_GET['id'];
                    $sender=new clients_model();
                    $returndata=$sender->search_clients($id);
                    
                    
                }
                public function deleteClients(){
 
                    $id = $_POST['idclients'];
                    print_r($_GET['idclients']);
                    echo $id;
                    
                }
	}
?>
