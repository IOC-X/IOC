<?php

include_once '/models/Carwash_model.php';

class Carwash extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('carwash/index', false);
    }

    public function redirect($location) {
        header('Location: ' . $location);
    }

    public function packages() {
        $model = new Carwash_model();
        $packages = $model->selectAllpackages();

        //$this->view->render('carwash/packages',false);
        include '/views/carwash/packages.php';
    }

    public function EditPackageEntries() {
        $model = new Carwash_model();
        $packages = $model->selectAllpackages();
        include '/views/carwash/packages/EditPackageEntries.php';
    }

    public function transactions() {
        $this->view->render('carwash/transactions', false);
    }

    public function regular_customers() {
        $model = new Carwash_model();
        $customers = $model->selectAllcustomers();
        include '/views/carwash/regular_customers.php';
    }

    public function EditCustomerEntries() {
        $model = new Carwash_model();
        $customers = $model->selectAllcustomers();
        include '/views/carwash/regular_customers/EditCustomerEntries.php';
    }

    public function report() {

        include '/views/carwash/report.php';
    }

    public function CustomerReport() {
        $model = new Carwash_model();
        $stats = $model->CustomerStatistics();
        include '/views/carwash/report/CustomerReport.php';
    }

    public function packageReport() {
        $model = new Carwash_model();
        $stats = $model->packageUsage();
        include '/views/carwash/report/packageReport.php';
    }

    public function alert() {
        include '/views/carwash/alert.php';
    }

    public function editPackage() {
        $model = new Carwash_model();
        $id = $_POST['id'];
        echo $id;
        echo 'hy from edit';
        $package = $model->selectPackgeById($id);
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description = isset($_POST['description']) ? trim($_POST['description']) : null;
        $time = isset($_POST['time']) ? trim($_POST['time']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null; {
            $packages = $model->editPackage($name, $description, $price, $time, $id);
        }
        // $this->redirect('/IOC/#/carwash');
    }

    public function edit_package($id = false) {
        //$this->view->render('carwash/edit',false);
        //$id=$_POST['id'];
        $name = '';
        $description = '';
        $price = '';
        $title = 'Edit package';
        $model = new Carwash_model();
        $package = $model->selectPackgeById($id);

        include '/views/carwash/packages/edit_package.php';
    }

    public function view_package($id) {
        //$id     = $_POST['id'];
        $model = new Carwash_model();
        $package = $model->selectPackgeById($id);
        //$this->view->render('carwash/view_package', false);
        include '/views/carwash/packages/view_package.php';
    }

    public function delete_package() {
        $id = $_POST['ID'];
        $model = new Carwash_model();
        $package = $model->deletePackage($id);
    }

    public function createPackage() {
        $model = new Carwash_model();

//        if (isset($_POST['form-submitted'])) {
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description = isset($_POST['description']) ? trim($_POST['description']) : null;
        $time = isset($_POST['time']) ? trim($_POST['time']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        {
            $packages = $model->createPackage($name, $description, $time, $price);
        }
        //  $this->redirect('/IOC/#/carwash/packages');
    }

    public function create_package() {
        $name = '';
        $description = '';
        $time = '';
        $price = '';
        //$this->view->render('carwash/create_package', false);
        include '/views/carwash/packages/create_package.php';
    }

    public function view_customer($id = false) {

        $model = new Carwash_model();
        $customer = $model->selectCustomerById($id);

        include '/views/carwash/regular_customers/view_customer.php';
    }

    public function addCustomer() {
        $model = new Carwash_model();
        //if (isset($_POST['form-submitted'])) {
        $cust_id = isset($_POST['cust_id']) ? trim($_POST['cust_id']) : null;
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $nic = isset($_POST['nic']) ? trim($_POST['nic']) : null;
        $address = isset($_POST['address']) ? trim($_POST['address']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $customers = $model->addCustomer($cust_id, $name, $nic, $address, $contact, $email, $date);
        }
    }

    public function add_customer() {
        $cust_id = '';
        $name = '';
        $nic = '';
        $address = '';
        $contact = '';
        $email = '';

        include '/views/carwash/regular_customers/add_customer.php';
    }

    public function delete_customer() {
        $id = $_POST['ID'];
        $model = new Carwash_model();
        $customers = $model->deleteCustomer($id);
    }

    public function editCustomer() {
        $model = new Carwash_model();
        $cust_id = $_POST['cust_id'];

        $customer = $model->selectCustomerById($cust_id);
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $nic = isset($_POST['nic']) ? trim($_POST['nic']) : null;
        $address = isset($_POST['address']) ? trim($_POST['address']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null; {
            $customers = $model->editCustomer($name, $nic, $address, $contact, $email, $date, $cust_id);
        }
    }

    public function edit_customer() {

        include '/views/carwash/regular_customers/EditCustomerEntries.php';
    }

    public function searchCustomer() {

        include '/views/carwash/regular_customers/searchCustomer.php';
    }

    public function customerSearchDetails() {
        $model = new Carwash_model();
        $list = $model->searchCustomer();
        foreach ($list as $rs) {
            // put in bold the written text
            $name = str_replace($_POST['keyword'], '<b>' . $_POST['keyword'] . '</b>', $rs->name);
            // add new option
            echo '<li style="padding: 2px;list-style: none;border: 1px solid #eaeaea" onclick="set_item(\'' . str_replace("'", "\'", $rs->name) . '\')">' . $name . '</li>';
        }
    }

    public function Reg_transactions() {
        $model = new Carwash_model();
        $customers = $model->selectAllcustomers();
        $packages = $model->selectAllpackages();

        include '/views/carwash/transactions/Reg_transactions.php';
    }

    public function addTransaction() {
        $model = new Carwash_model();

//        if (isset($_POST['form-submitted'])) {
        $cust_id = isset($_POST['cust_id']) ? trim($_POST['cust_id']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $transactions = $model->addTransaction($cust_id, $package, $vehicleNo, $amount, $date);
        }
    }

    public function editTransaction() {
        $model = new Carwash_model();
        $id = $_POST['id'];

        // $customer = $model->selectCustomerById($cust_id);
        $cust_id = isset($_POST['cust_id']) ? trim($_POST['cust_id']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null; {
            $customers = $model->editRegTransaction($cust_id, $package, $vehicleNo, $amount, $date, $id);
        }
    }

    public function delete_transaction() {
        $id = $_POST['id'];
        $model = new Carwash_model();
        $transactions = $model->deleteTransaction($id);
    }

    public function reg_history() {
        $model = new Carwash_model();
        $customers = $model->selectAllcustomers();
        $packages = $model->selectAllpackages();
        $regularTransactions = $model->selectAllRegulartransactions();
        include '/views/carwash/transactions/reg_history.php';
    }

    public function NonReg_transactions() {
        $model = new Carwash_model();
        $packages = $model->selectAllpackages();

        include '/views/carwash/transactions/NonReg_transactions.php';
    }

    public function addCarTransaction() {
        $model = new Carwash_model();

//        if (isset($_POST['form-submitted'])) {
        $cname = isset($_POST['cname']) ? trim($_POST['cname']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $transactions = $model->addCarTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date);
        }
        //  $this->redirect('/IOC/#/carwash/packages');     
    }

    public function editCarTransaction() {
        $model = new Carwash_model();
        $id = $_POST['id'];

        // $customer = $model->selectCustomerById($cust_id);
        $cname = isset($_POST['cname']) ? trim($_POST['cname']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null; {
            $customers = $model->editCarTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id);
        }
    }

    public function delete_Cartransaction() {
        $id = $_POST['id'];
        $model = new Carwash_model();
        $transactions = $model->deleteCarTransaction($id);
    }

    public function nonreg_history() {
        $model = new Carwash_model();
        $Transactions = $model->selectAlltransactions();
        include '/views/carwash/transactions/nonreg_history.php';
    }

    public function RegularAlert() {
        $model = new Carwash_model();
        $regularTransactions = $model->selectAllRegtransactions();
        include '/views/carwash/alerts/RegularAlert.php';
    }

    public function NormalAlert() {
        $model = new Carwash_model();
        $Transactions = $model->selectAllCartransactions();

        include '/views/carwash/alerts/NormalAlert.php';
    }

    public function UpdateStatus() {
        $id = $_POST['id'];
        $user=$_POST['user'];
        $mail=$_POST['email'];
        $contact=$_POST['contact'];
        
        $model = new Carwash_model();
        $status = $model->updateRegStatus($id);
        $mailalert = $model->SendMail($mail,$user);
        $smsAlert = $model->SendSms($contact);
        
    }

    public function UpdateNonRegStatus() {
        $id = $_POST['id'];
        $user=$_POST['user'];
        $mail=$_POST['email'];
        $contact=$_POST['contact'];
        $model = new Carwash_model();
        $status = $model->updateNonRegStatus($id);
        $mailalert = $model->SendMail($mail,$user);
        $smsAlert = $model->SendSms($contact);
    }

    
}

?>