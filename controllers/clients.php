<?php

class clients extends Controller {

    function __construct() {
        require_once('models/clients_model.php');
        parent::__construct();
    }

    public function index() {
        $this->view->render('clients/index', false);
    }

    public function addclient() {
        $this->view->render('clients/add_clients', false);
    }

    public function client_management() {
        $this->view->render('clients/client_management', false);
    }

    public function client_transactions() {
        $this->view->render('clients/client_transactions', false);
    }

    public function clientpay() {
        $this->view->render('clients/clientloan', false);
    }

    public function clientupdate() {
        $this->view->render('clients/client_transaction_portal', false);
    }

    public function clientaddTransaction() {
        $this->view->render('clients/addTransactionsportal', false);
    }

    public function listclients() {
        $this->view->render('clients/listclient', false);
    }

    public function getclientdata() {
        $model = new clients_model();

        echo json_encode($model->list_clients());
    }

    public function addclientin() {
        include 'views/clients/add_client.php';
    }

    public function clientlist() {
        include 'views/clients/client_details.php';
    }

    public function clientSearch() {
        include 'views/clients/client_search.php';
    }

    public function clientmanagement() {

        include 'views/clients/client_management_portal.php';
    }

    //sending update emails
    public function sendemail() {
        //require 'models/clients_model.php';
        $email = $_POST['email'];
        $user = $_POST['user'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        $model = new clients_model();
        $model->sendemail($email, $user, $subject, $body);
    }

    //add clients with first transaction
    public function insertClients() {

        $autocode = $_POST['client_code'];
        $fname = $_POST['client_fname'];
        $lname = $_POST['client_lname'];
        $address = $_POST['client_address'];
        $nic = $_POST['client_nic'];
        $phone = $_POST['client_phone'];
        $purchasedate = $_POST['client_purchase_date'];
        $amount = $_POST['client_purchase_amount'];
        $profile = $_POST['client_image'];
        require_once('models/clients_model.php');
        $sendtomodel = new clients_model();
        $sendtomodel->addclient($autocode, $fname, $lname, $address, $nic, $phone, $purchasedate, $amount, $profile);
    }

    //update clients
    public function updateclients() {

        $autocode = $_POST['client_code'];
        $fname = $_POST['client_fname'];
        $lname = $_POST['client_lname'];
        $address = $_POST['client_address'];

        $phone = $_POST['client_pnumber'];
        $sendtomodel = new clients_model();
        $sendtomodel->update_clients($autocode, $fname, $lname, $address, $phone);
    }

    //client transaction insert
    public function insertTranactions() {
        $client_no = $_POST['client_id'];
        $client_name = $_POST['client_name'];
        $client_vechicle = $_POST['client_pump_vechicle'];
        $client_pumper = $_POST['client_pump_by'];
        $pump_date = $_POST['pump_date'];
        $fuel_type = $_POST['fuelType'];
        $pump_number = $_POST['client_pump_no'];
        $pump_liters = $_POST['client_pump_liters'];
        $pump_value = $_POST['client_pump_value'];

        echo $client_name . " ";
        echo $client_vechicle . " ";
        echo $client_pumper . " ";
        echo $pump_date . " ";
        echo $fuel_type . " ";
        echo $pump_number . " ";
        echo $pump_liters . " ";
        echo $pump_value . " ";
        $sendtomodel1 = new clients_model();
        $sendtomodel1->addtransactions($client_no, $client_name, $client_vechicle, $client_pumper, $pump_date, $fuel_type, $pump_number, $pump_liters, $pump_value);
    }

    //search clients
    public function searchClients() {
        require ('models/clients_model.php');
        $id = $_GET['autocode'];
        $sender = new clients_model();
        $returndata = $sender->search_clients($id);
    }

    //deleting clients    
    public function deleteClients() {

        $id = $_POST['idclients'];
        $model = new clients_model();
        $delete = $model->deleteClients($id);
    }

    //client pump history
    public function getdatatohis() {
        $model = new clients_model();

        echo json_encode($model->historypump());
    }

    //client detail report
    public function clientreport() {
        include 'views/clients/report/RegHistory.php';
    }
    
    //client detailed report
    public function CustomerpdfReport() {
        $model = new clients_model();
        $clients = $model->clients();
        include 'views/clients/report/clientsReport.php';
    }

    public function CustomerpdfReportDisplay() {
        include 'views/clients/report/clientsDisplay.php';
    }

    //client detailed report
    public function retrieveClientReport() {

        $model = new clients_model();
        $yy = $_GET['yy'];

        $str = $yy;
        $parts = explode("-", $str);
        $year = $parts[0];
        $month = $parts[1];


        $modelStocks = $model->retrieveClientReport($year, $month);
        include 'views/clients/report/clientMakeReport.php';
    }
//report
    
        public function reportt() {
        $this->view->render('clients/report/reportIndex', false);
    }
 //transaction report
                public function tranReport(){
        	  include '/views/clients/report/transactionReport.php';
        } 
                public function displayTrReport(){
        	$this->view->render('clients/report/transactionDisplay',false);
        }
        public function retrieveTrReport(){
        	
			$model = new clients_model();
			$yy = $_GET['yy'];

    $str = $yy;
    $parts = explode("*", $str);
    $year = $parts[0];
    $code = $parts[1];

    
			$modelStocks = $model->trReports($year,$code);
                        include 'views/clients/report/transactionMakeReport.php';
        }
    
    
    
    
    
}

?>
