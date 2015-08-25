<?php
include_once 'models/lubricant_model.php';

class Lube_service extends Controller{
       
    function __construct() {
        parent::__construct();
    }
//   index 
    public function index()
     {
        
        $this->view->render('lubricantService/index',false);
     } 
     
        //PACKAGE DATA RETREIVING
     public function packages() {
        
        include 'views/lubricantService/packages/lu_packages.php';
    }
     public function create_package() {
        $name = '';
        $description = '';
        $time = '';
        $price = '';
        include 'views/lubricantService/packages/create_package.php';
    }

    public function EditPackageEntries() {
        $model = new lubricant_model();
        $packages = $model->selectAllpackages();
        include 'views/lubricantService/packages/EditPackageEntries.php';
    }

    public function createPackage() {
        $model = new lubricant_model();


        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description = isset($_POST['description']) ? trim($_POST['description']) : null;
        $time = isset($_POST['time']) ? trim($_POST['time']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        {
            $packages = $model->createPackage($name, $description, $time, $price);
        }
    }

    public function editPackage() {
        $model = new lubricant_model();
        $id = $_POST['id'];
       
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description = isset($_POST['description']) ? trim($_POST['description']) : null;
        $time = isset($_POST['time']) ? trim($_POST['time']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null; {
            $packages = $model->editPackage($name, $description, $price, $time, $id);
        }
    }

    public function delete_package() {
        $id = $_POST['ID'];
        $model = new lubricant_model();
        $package = $model->deletePackage($id);
    }
      public function lu_pac_gold()
     {
        
        $this->view->render('lubricantService/packages/lu_pac_gold',false);
        
     }
     public function lu_pac_silver()
     {
        
        $this->view->render('lubricantService/packages/lu_pac_silver',false);
        
     }
      public function lu_pac_custom()
     {
        
        $this->view->render('lubricantService/packages/lu_pac_custom',false);
        
     }
     //CUSTOMER DATA RETRIEVING
      public function lu_customers() {
        $model = new lubricant_model();
        //$customers = $model->selectAllcustomers();
        include 'views/lubricantService/lu_customers.php';
        
    }
    
     public function addCustomer() {
        $model = new lubricant_model();
        
        $id = isset($_POST['id']) ? trim($_POST['id']) : null;
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $address = isset($_POST['address']) ? trim($_POST['address']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $customers = $model->addCustomer($id, $name, $address, $contact, $email, $date);
        }
    }

    public function add_customer() {
        $id = '';
        $name = '';
        $address = '';
        $contact = '';
        $email = '';

        include 'views/lubricantService/regular_customers/add_customer.php';
    }

    public function EditCustomerEntries() {
        $model = new lubricant_model();
        $customers = $model->selectAllcustomers();
        include 'views/lubricantService/regular_customers/EditCustomerEntries.php';
    }
     public function editCustomer() {
        $model = new lubricant_model();
        $id = $_POST['id'];
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $address = isset($_POST['address']) ? trim($_POST['address']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null; {
            $customers = $model->editCustomer($name, $address, $contact, $email, $date, $id);
        }
    }
    
    public function delete_customer() {
        $id = $_POST['ID'];
        $model = new lubricant_model();
        $customers = $model->deleteCustomer($id);
    }
    
    //TRANSACTION DATA RETREIVE 
    public function lu_transactions(){
        include 'views/lubricantService/lu_transactions.php';
    }
    public function Reg_Lu_transactions() {
        $model = new lubricant_model();
        $customers = $model->selectAllcustomers();
        $lu_packages = $model->selectAllpackages();

        include 'views/lubricantService/transactions/Reg_transactions.php';
    }

    public function addLuTransaction() {
        $model = new lubricant_model();

        $cust_id = isset($_POST['cust_id']) ? trim($_POST['cust_id']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $transactions = $model->addTransaction($cust_id, $package, $vehicleNo, $amount, $date);
        }
    }

    public function editLuTransaction() {
        $model = new lubricant_model();
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

    public function delete_Lu_transaction() {
        $id = $_POST['id'];
        $model = new lubricant_model();
        $transactions = $model->deleteTransaction($id);
    }

    public function reg_Lu_history() {
        $model = new lubricant_model();
        $customers = $model->selectAllcustomers();
        $packages = $model->selectAllpackages();
        $regularTransactions = $model->selectAllRegulartransactions();
        include 'views/lubricantService/transactions/reg_history.php';
    }

    public function NonReg_Lu_transactions() {
        $model = new lubricant_model();
        $packages = $model->selectAllpackages();

        include 'views/lubricantService/transactions/NonReg_transactions.php';
    }

    public function addNonRegLuTransaction() {
        $model = new lubricant_model();


        $cname = isset($_POST['cname']) ? trim($_POST['cname']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null;
        {
            $transactions = $model->addNonRegLuTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date);
        }
          
    }

    public function editNonRegLuTransaction() {
        $model = new lubricant_model();
        $id = $_POST['id'];

        // $customer = $model->selectCustomerById($cust_id);
        $cname = isset($_POST['cname']) ? trim($_POST['cname']) : null;
        $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $package = isset($_POST['package']) ? trim($_POST['package']) : null;
        $vehicleNo = isset($_POST['vehicleNo']) ? trim($_POST['vehicleNo']) : null;
        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : null;
        $date = isset($_POST['date']) ? trim($_POST['date']) : null; {
            $customers = $model->editNonRegLuTransaction($cname, $contact, $email, $package, $vehicleNo, $amount, $date, $id);
        }
    }

    public function delete_NonRegLutransaction() {
        $id = $_POST['id'];
        $model = new lubricant_model();
        $transactions = $model->deleteNonRegLuTransaction($id);
    }

    public function nonreg_Luhistory() {
        $model = new lubricant_model();
        $Transactions = $model->selectAllNonRegLutransactions();
        include 'views/lubricantService/transactions/nonreg_history.php';
    }
    
    //REPORT
    public function report(){
        include 'views/lubricantService/report.php';
    }
}