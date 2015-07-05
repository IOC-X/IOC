<?php 
include_once '/models/Carwash_model.php';
	class Carwash extends Controller{
            public function __construct(){
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

    public function transactions() {
        //require('models/Stocks_model.php');
        //$model = new Stocks_model();
        //$data = $model->getMorningStocks();
        $this->view->render('carwash/transactions', false);
    }

    public function regular_customers() {
        $model = new Carwash_model();
        $customers=$model->selectAllcustomers();
        include '/views/carwash/regular_customers.php';
    }

    public function report() {
        //require('models/Stocks_model.php');
        //$model = new Stocks_model();
        //$data = $model->getMorningStocks();
        $this->view->render('carwash/report', false);
    }

    public function edit_package($id = false) {
        //  $this->view->render('carwash/edit',false);
        $model = new Carwash_model();
        $name = '';
        $description = '';
        $price = '';
        //$id     = $_GET['id'];
        $package = $model->selectPackgeById($id);
        $title = 'Edit package';
        // echo $id;

        if (isset($_POST['form-submitted'])) {
            $name = isset($_POST['name']) ? trim($_POST['name']) : null;
            $description = isset($_POST['description']) ? trim($_POST['description']) : null;
            $price = isset($_POST['price']) ? trim($_POST['price']) : null; 
            {
                $packages = $model->editPackage($name, $description, $price, $id);
            }
        }
        include '/views/carwash/edit_package.php';
    }

    public function view_package($id = false) {

        $model = new Carwash_model();
        $package = $model->selectPackgeById($id);
       // $this->view->render('carwash/view_package', false);
        include '/views/carwash/view_package.php';
    }

    public function delete_package($id) {
        $model = new Carwash_model();
        $package = $model->deletePackage($id);
        $this->redirect('');
    }

    public function create_package() {
        $model = new Carwash_model();

        $name = '';
        $description = '';
        $time = '';
        $price = '';
        if (isset($_POST['form-submitted'])) {
            $name = isset($_POST['name']) ? trim($_POST['name']) : null;
            $description = isset($_POST['description']) ? trim($_POST['description']) : null;
            $time = isset($_POST['time']) ? trim($_POST['time']) : null;
            $price = isset($_POST['price']) ? trim($_POST['price']) : null; {
                $packages = $model->createPackage($name, $description, $time, $price);
            }
        }
        include '/views/carwash/create_package.php';
    }
    public function view_customer($id = false) {

        $model = new Carwash_model();
        $customer = $model->selectCustomerById($id);

        include '/views/carwash/view_customer.php';
    }
    public function add_customer() {
        $model = new Carwash_model();

        $cust_id='';
        $name='';
        $nic='';
        $address='';
        $contact='';
        if (isset($_POST['form-submitted'])) {
            $cust_id = isset($_POST['cust_id']) ? trim($_POST['cust_id']) : null;
            $name = isset($_POST['name']) ? trim($_POST['name']) : null;
            $nic = isset($_POST['nic']) ? trim($_POST['nic']) : null;
            $address = isset($_POST['address']) ? trim($_POST['address']) : null;
            $contact = isset($_POST['contact']) ? trim($_POST['contact']) : null;{
                $customers = $model->addCustomer($cust_id, $name, $nic, $address, $contact);
            }
        }
        include '/views/carwash/add_customer.php';
    }
    public function delete_customer($id) {
        $model = new Carwash_model();
        $package = $model->deleteCustomer($id);
        $this->redirect('');
        //include '/views/carwash/regular_customers.php';
    }

}

?>